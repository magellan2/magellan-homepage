<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "examples";
      $language = "de";
      include_once "head.php";
    ?>
    <title>
      Magellan Extended Commands
    </title>
  </head>
  <body>
    <div id="container">
      <?php 
        include_once "navi_".$language.".php";
        include_once "header.php"; 
      ?>
      <div id="center">
        <h2>
          Beispiele
        </h2>
        <p>
          Ich hab hier eine Reihe von Beispielen untergebracht. Sie stammen
          nicht alle von mir. Wer einen besonders coolen Script hat und ihn
          der Welt kundtun will, soll sich bei mir melden. Schreib mir ne 
          Mail an thoralf at m84 de.
        </p>
        <h3>Einheit automatisch best&auml;tigen</h3>
        <p>
          Hier ein Beispiel, wie man ganz einfach eine Einheit bestÃ¤tigt.
        </p>
        <pre>
if (!unit.isOrdersConfirmed()) {
  unit.setOrdersConfirmed(true);
}
        </pre>
        <h3>Einheiten ausbilden</h3>
        <p>
        </p>
        <pre>
soldier(Unit unit, int level, String talent, String waffe, boolean taktiker, boolean held, boolean lerne, boolean bewache) {
  if (helper.getLevel(unit,"Taktik") < level && taktiker && lerne) {
    helper.setOrder("LERNE Taktik");
    unit.setOrdersConfirmed(true);
  } else if (helper.getLevel(unit,talent) < level && lerne) {
    helper.setOrder("LERNE "+talent);
    unit.setOrdersConfirmed(true);
  } else if (helper.getLevel(unit,"Ausdauer") < level) {
    helper.setOrder("LERNE Ausdauer");
    unit.setOrdersConfirmed(true);
  } else if (helper.getLevel(unit,"Reiten") < 1) {
    helper.setOrder("LERNE Reiten");
    unit.setOrdersConfirmed(true);
  } else if (helper.getLevel(unit,"Steuereintreiben") < level && lerne) {
    helper.setOrder("LERNE Steuereintreiben");
    unit.setOrdersConfirmed(true);
  }

  helper.addOrder("; Soldat lernt in angegebenr Reihenfolge folgende Talente");
  if (taktiker && lerne) helper.addOrder("; lernt auf T"+level+" Taktik");
  if (lerne) helper.addOrder("; lernt auf T"+level+" "+talent);
  helper.addOrder("; lernt auf T"+level+" Ausdauer");
  helper.addOrder("; lernt auf T1 Reiten");
  if (lerne) helper.addOrder("; lernt auf T"+level+" Steuereintreiben");

  if (helper.getItemCount(unit,waffe)>0 && bewache) {
    helper.addOrder("BEWACHEN");
  }
}
</pre>
<pre>
if (!unit.isOrdersConfirmed()) {
  String talent = "Stangenwaffen";
  String waffe  = "Speer";
  boolean taktiker = false;
  boolean held = false;
  boolean lerne = true;
  boolean bewache = true;

  soldier(unit, 5, talent, waffe, taktiker , held , lerne , bewache);
}
        </pre>
        <h3>Ganze Regionen bestÃ¤tigen</h3>
        <p>
        </p>
        <pre>
clearRegion(Region region, String partei) {
  for (Unit unit : region.units()) {
    if (unit.getFaction().getID().toString().equals(partei)) continue;
    unit.setOrdersConfirmed(true);
  }
}
</pre>
<pre>
clearRegion((Region)container,"ntc");
        </pre>
        <h3>HÃ¤ndler automatisieren</h3>
        <p>
        </p>
        <pre>
haendler(Unit haendler, int kaufenFaktor, Map transporters) {
  if (!haendler.isOrdersConfirmed()) {

    Region region = haendler.getRegion();
    ItemType luxuryItem = helper.getRegionLuxuryItem(region);
    boolean verkauf = false;
    boolean einkauf = false;

    // gibt es Luxusgüter zu kaufen?
    if (region.maxLuxuries() > 0) {
      helper.setOrder(haendler, "; ...");
      Map luxuryPrices = region.getPrices();
      helper.addOrder(haendler, "; --- Warenverkauf ---");
      for (LuxuryPrice price : luxuryPrices.values()) {
        if (price.getPrice()<0) continue; // Wareneinkauf
        List transfer = haendler.getItemTransferRelations(price.getItemType());

        if (haendler.getItem(price.getItemType()) == null && (transfer == null || transfer.size() == 0)) {
          // haben wir nicht
          helper.addOrder(haendler, "; VERKAUFEN ALLES "+price.getItemType().getName());
        } else {
          // haben wir, können wir vertickern
          helper.addOrder(haendler, "VERKAUFEN ALLES "+price.getItemType().getName());
        }
        verkauf = true;
      }
      helper.addOrder(haendler, "; --- Wareneinkauf ---");
      helper.addOrder(haendler, "KAUFEN "+(region.maxLuxuries()*kaufenFaktor)+" "+luxuryItem.getName());
      einkauf = true;
    }

    boolean transfer = false;
    Item item = haendler.getItem(luxuryItem);
    int itemAmount = item.getAmount();

    if (item != null) {
      Iterator iterator = transporters.keySet().iterator();
      helper.addOrder("; --- Warenübergabe an Transporter ---");
      while (iterator.hasNext()) {
        String transporterId = iterator.next();
        int amount = transporters.get(transporterId);
      
        if (helper.unitSeesOtherUnit(transporterId)) {
          if (amount > itemAmount) amount = itemAmount;
          helper.addOrder("GIB "+transporterId+" "+amount+" "+luxuryItem.getName()+" ; Transfer");
          itemAmount -= amount;
          transfer = true;
        }

        if (itemAmount <=0) break;
      }
    }

    unit.setOrdersConfirmed(true);
  }
}
</pre>

<pre>
if (!unit.isOrdersConfirmed()) {

  HashMap transporters = new HashMap();
  transporters.put("8h4i",1000);
  transporters.put("x6ct",1000);

  int kaufenFaktor = 3;

  haendler(unit, kaufenFaktor, transporters);
}
        </pre>
        <h3>KrÃ¤uter Ã¼bergeben</h3>
        <p>
        </p>
        <pre>
if (!unit.isOrdersConfirmed()) {

  if (helper.unitSeesOtherUnit("i2de")) {
    helper.addOrder("GIB i2de KRÄUTER ; nach Rolkos");
    helper.addOrder("; Kräuterübergabe an Transporter:");
    unit.setOrdersConfirmed(true);

  }
}
        </pre>
        <h3>Schmiede automatisieren</h3>
        <p>
        </p>
        <pre>
if (!unit.isOrdersConfirmed()) {

  boolean bihaender = (helper.getItemCount(unit,"Bihänder") > 0);
  boolean schwert = (helper.getItemCount(unit,"Schwert") > 0);
  boolean bogen = (helper.getItemCount(unit,"Bogen") > 0);
  boolean armbrust = (helper.getItemCount(unit,"Armbrust") > 0);
  boolean speer = (helper.getItemCount(unit,"Speer") > 0);
  boolean kettenhemd = (helper.getItemCount(unit,"Kettenhemd") > 0);
  boolean plattenpanzer = (helper.getItemCount(unit,"Plattenpanzer") > 0);
  boolean transfer = false;

  ArrayList transporters = new ArrayList();
  transporters.add("x6ct");

  for (String transporter : transporters) {
    if (helper.unitSeesOtherUnit(transporter)) {
      if (bihaender) {
        helper.addOrder("GIB "+transporter+" ALLES Bihänder ; nach Dovin");
        transfer = true;
      }
      if (schwert) {
        helper.addOrder("GIB "+transporter+" ALLES Schwert ; nach Dovin");
        transfer = true;
      }
      if (bogen) {
        helper.addOrder("GIB "+transporter+" ALLES Bogen ; nach Dovin");
        transfer = true;
      }
      if (armbrust) {
        helper.addOrder("GIB "+transporter+" ALLES Armbrust ; nach Dovin");
        transfer = true;
      }
      if (speer) {
        helper.addOrder("GIB "+transporter+" ALLES Speer ; nach Dovin");
        transfer = true;
      }
      if (kettenhemd) {
        helper.addOrder("GIB "+transporter+" ALLES Kettenhemd ; nach Dovin");
        transfer = true;
      }
      if (plattenpanzer) {
        helper.addOrder("GIB "+transporter+" ALLES Plattenpanzer ; nach Dovin");
        transfer = true;
      }

      if (transfer) {
        helper.addOrder("; Transfer nach Dovin ");
      }
      break;
    }
  }

  unit.setOrdersConfirmed(true);
}
        </pre>
        <h3>Transporter automatisieren</h3>
        <p>
        </p>
        <pre>
if (!unit.isOrdersConfirmed()) {

  // ------- Nordende --------
  if (helper.unitIsInRegion("Nordende")) {
    if (helper.getItemCount(unit,"Öl") > 0 || helper.getItemCount(unit,"Oil") > 0) {
      helper.addOrder("GIB djm1 ALLES Öl ; Madam Kuranha");
    }
    if (helper.getItemCount(unit,"Weihrauch") > 0) {
      helper.addOrder("GIB djm1 ALLES Weihrauch ; Madam Kuranha");
    }
    if (helper.getItemCount(unit,"Gewürz") > 0) {
      helper.addOrder("GIB djm1 ALLES Gewürz ; Madam Kuranha");
    }
    if (helper.getItemCount(unit,"Holz") > 0) {
      helper.addOrder("GIB 5u5k ALLES Holz ; Burgenbauer Archito");
    }
    if (helper.getItemCount(unit,"Silver") > 0 || helper.getItemCount(unit,"Silber") > 0) {
      helper.addOrder("GIB d7b4 ALLES Silber; Magistrat Klaus von Nordende");
    }
    helper.addOrder("; Übergabe in Nordende:");
    unit.setOrdersConfirmed(true);

  // ------- Rolkos --------
  } else if (helper.unitIsInRegion("Rolkos")) {
    if (helper.getItemCount(unit,"Balsam") > 0) {
      if (helper.unitSeesOtherUnit("e4Lx")) {
        helper.addOrder("GIB e4Lx ALLES Balsam ; Kutscher nach Dovin");
      } else {
        helper.addOrder("GIB ym52 ALLES Balsam ; Madam Rhian");
      }
    }
    if (helper.getItemCount(unit,"Eisen") > 0) {
      helper.addOrder("GIB 8sxu ALLES Eisen ; Schmied Hebel");
    }
    if (helper.unitSeesOtherUnit("e4Lx")) {
      helper.addOrder("GIB e4Lx KRÄUTER ; Kutscher nach Dovin");
    } else {
      helper.addOrder("GIB j8sn KRÄUTER ; Lehrling Pfurx");
    }
    helper.addOrder("; Übergabe in Rolkos:");
    unit.setOrdersConfirmed(true);
  }
}
        </pre>
        <h3>Pferdedressur</h3>
        <p>
        </p>
        <pre>
if (!unit.isOrdersConfirmed()) {

  if (unit.getRegion().getHorses()>=50) {
    helper.setOrder("MACHEN Pferd");
  } else {
    helper.setOrder("LERNEN Pferdedressur");
  }

  if (helper.getItemCount(unit,"Pferd")==0) {
    unit.setOrdersConfirmed(true);
  }
}
        </pre>
        <h3>Silber horten</h3>
        <p>
        </p>
        <pre>
if (!unit.isOrdersConfirmed()) {
  int silver = helper.getItemCount(unit,"Silver");
  if (silver == 0) silver = helper.getItemCount(unit,"Silber");

  if (silver > 0) {
    helper.addOrder("GIB 8uv9 ALLES Silber");
  }
  unit.setOrdersConfirmed(true);
}
        </pre>
        <h3>Schilder mit LuxusgÃ¼tern aufstellen</h3>
        <p>
Where nodeList is a List with RegionIDs.
        </p>
        <pre>
<pre>
for (i = 0; i < nodeList.size(); i++) {
 Region region = world.getRegion(nodeList.get(i));
 if (region.maxLuxuries() > 0) {
   Iterator keyValuePairs = region.getPrices().entrySet().iterator();
   for (j = 0; j < region.getPrices().size(); j++) {
     Map.Entry entry = (Map.Entry) keyValuePairs.next();
     Object key = entry.getKey();
     Object value = entry.getValue();
     Sign sign = new Sign("key:"+key.toString()+" value:"+value.getPrice().toString());
     region.addSign(sign);
   }
 }
}
        </pre>
        <h3>Schilder mit Anzahl der Pferde aufstellen</h3>
        <p>
        </p>
        <pre>
import magellan.library.*;

for (Region region : world.regions().values()) {
  if (region.getRegionType().isOcean()) continue;

  int horses = region.getHorses();
  if (horses == -1) continue;

  region.clearSigns();
  Sign sign = new Sign( ""+horses );
  region.addSign(sign);
} 
</pre>
        </p>
      </div>
    </div>
  </body>
</html>

