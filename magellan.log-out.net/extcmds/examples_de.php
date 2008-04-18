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
        <p>
          Hier also einige Scriptbeispiele:
          <ul>
            <li><a href="#script1">Einheit automatisch best�tigen</a></li>
            <li><a href="#script2">Pferdedressur</a></li>
            <li><a href="#script3">Kr�uter �bergeben</a></li>
            <li><a href="#script4">Transporter automatisieren</a></li>
            <li><a href="#script5">Schmiede automatisieren</a></li>
            <li><a href="#script6">Einheiten ausbilden</a></li>
            <li><a href="#script7">Ganze Regionen best�tigen</a></li>
            <li><a href="#script8">H�ndler automatisieren</a></li>
            <li><a href="#script9">Silber horten</a></li>
            <li><a href="#script10">Schilder mit Luxusg�tern aufstellen</a></li>
            <li><a href="#script11">Schilder mit Anzahl der Pferde aufstellen</a></li>
          </ul>
        </p>
        <hr/>
        <a name="script1"></a>
        <h3>Einheit automatisch best�tigen</h3>
        <p>
          Hier ein Beispiel, wie man ganz einfach eine Einheit best�tigt.
          Wird der Script ausgef�hrt, wird die Einheit best�tigt. Das macht
          zum Beispiel bei Einheiten Sinn, die bis ans Lebensende immer
          das Selbe tun und keine Interaktion ben�tigen - z.B. Wahrnehmung lernen.
        </p>
        <pre class="example">

if (!unit.isOrdersConfirmed()) {
  unit.setOrdersConfirmed(true);
}
        </pre>
        <p>
          Die Bedingung <tt>unit.isOrdersConfirmed()</tt> ist immer dann hilfreich,
          wenn man Befehle nicht doppelt geben will. Zum Beispiel, wenn aus Versehen
          der Script doppelt ausgef�hrt wird. <tt>unit</tt> ist dabei das Objekt
          der Einheit und enth�lt alle Informationen �ber diese Einheit und indirekt
          �ber die gesamte aktuell geladene Welt. Dazu aber sp�ter mehr.
        </p>
        <p>
          Mit <tt>unit.setOrdersConfirmed()</tt> wird dann die Einheit best�tigt,
          so wie man es von Magellan mit der Tastenkombination STRG+B kennt.
        </p>
        <hr/>
        <a name="script2"></a>
        <h3>Pferdedressur</h3>
        <p>
          Mit Hilfe des folgenden Scripts kann man einer Einheit, die das Talent 
          Pferdedressur besitzt sagen, dass sie nur dann Pferde aus der Region
          dressieren soll, wenn es mehr als 50 Pferde in der aktuellen Region gibt.
          Ansonsten wird einfach Pferdedressur gelernt.
        </p>
        <pre class="example">

if (!unit.isOrdersConfirmed()) {

  if (unit.getRegion().getHorses()>=50) {
    helper.setOrder(unit,"MACHEN Pferd");
  } else {
    helper.setOrder(unit,"LERNEN Pferdedressur");
  }

  if (helper.getItemCount(unit,"Pferd")==0) {
    unit.setOrdersConfirmed(true);
  }
}
        </pre>
        <p>
          Hier sind zwei Sachen neu. Zum einen liefert <tt>unit.getRegion()</tt> ein
          Objekt vom Typ Region. Es enth�lt alle Informationen zur Region, in der
          sich die Einheit befindet. Der andere Punkt ist <tt>helper.setOrder(unit,"")</tt>.
          Damit werden die Befehle der Einheit gesetzt - besser gesagt �berschrieben.
          Alle anderen Befehle dieser Einheit werden gel�scht - also Vorsicht!
        </p>
        <hr/>
        <a name="script3"></a>
        <h3>Kr�uter �bergeben</h3>
        <p>
          Der folgende Script �berpr�ft, ob die aktuelle Einheit die Einheit
          mit der Nummer "i2de" sieht - sprich, ob sie sich in der Region befindet.
          Wenn dem so ist, �bergibt sie alle Kr�uter, die sie besitzt, dieser Einheit.
          Im Falle von i2de handelt es sich um einen Transporter, der alle Kr�uter
          aufsammelt und von A nach B transportiert (siehe unten).
        </p>
        <pre class="example">

if (!unit.isOrdersConfirmed()) {
  if (helper.unitSeesOtherUnit("i2de")) {
    helper.addOrder(unit,"; Kr�uter�bergabe an Transporter:");
    helper.addOrder(unit,"GIB i2de KR�UTER ; nach Rolkos");
    unit.setOrdersConfirmed(true);
  }
}
        </pre>
        <p>
          Hier ist <tt>helper.addOrder()</tt> neu. Damit wird an den aktuellen
          Befehl der Einheit eine neue Zeile hinzugef�gt.
        </p>
        <hr/>
        <a name="script4"></a>
        <h3>Transporter automatisieren</h3>
        <p>
          Dieser Script ist ganz hilfreich f�r die Entwicklung eigener
          Scripte f�r Transporter, die zwischen bestimmten Regionen
          pendeln und pro Region bestimmte Dinge entladen.
        </p>
        <pre class="example">

if (!unit.isOrdersConfirmed()) {

  // ------- Nordende --------
  if (helper.unitIsInRegion("Nordende")) {
    helper.addOrder("; �bergaben in Nordende:");
    if (helper.getItemCount(unit,"�l") > 0 
        || helper.getItemCount(unit,"Oil") > 0) {
      helper.addOrder("GIB djm1 ALLES �l ; Madam Kuranha");
    }
    if (helper.getItemCount(unit,"Weihrauch") > 0) {
      helper.addOrder("GIB djm1 ALLES Weihrauch ; Madam Kuranha");
    }
    if (helper.getItemCount(unit,"Gew�rz") > 0) {
      helper.addOrder("GIB djm1 ALLES Gew�rz ; Madam Kuranha");
    }
    if (helper.getItemCount(unit,"Holz") > 0) {
      helper.addOrder("GIB 5u5k ALLES Holz ; Burgenbauer Archito");
    }
    if (helper.getItemCount(unit,"Silver") > 0 
        || helper.getItemCount(unit,"Silber") > 0) {
      helper.addOrder("GIB d7b4 ALLES Silber; Magistrat");
    }
    unit.setOrdersConfirmed(true);

  // ------- Rolkos --------
  } else if (helper.unitIsInRegion("Rolkos")) {
    helper.addOrder("; �bergabe in Rolkos:");
    if (helper.getItemCount(unit,"Balsam") > 0) {
      if (helper.unitSeesOtherUnit("e4Lx")) {
        helper.addOrder("GIB e4Lx ALLES Balsam ; Kutscher");
      } else {
        helper.addOrder("GIB ym52 ALLES Balsam ; Madam Rhian");
      }
    }
    if (helper.getItemCount(unit,"Eisen") > 0) {
      helper.addOrder("GIB 8sxu ALLES Eisen ; Schmied Hebel");
    }
    if (helper.unitSeesOtherUnit("e4Lx")) {
      helper.addOrder("GIB e4Lx KR�UTER ; Kutscher");
    } else {
      helper.addOrder("GIB j8sn KR�UTER ; Lehrling Pfurx");
    }
    unit.setOrdersConfirmed(true);
  }
}
        </pre>
        <hr/>
        <a name="script5"></a>
        <h3>Schmiede automatisieren</h3>
        <p>
         Dieser Script ist ganz n�tzlich, wenn man einen Produzenten
         hat, der Sachen herstellt und diese dann dynamisch an einen
         Transporter �bergeben soll. Im vorliegenden Falle handelt es
         sich um einen Waffenbauer, der mal die eine und mal die
         andere Waffe baut. Man k�nnte das jetzt noch verfeinern und
         diesen Code in eine Methode gie�en und die Liste der m�glichen
         Transporter �bergeben. Hier wird das Gewicht nicht beachtet.
        </p>
        <pre class="example">

if (!unit.isOrdersConfirmed()) {

  boolean bihaender = (helper.getItemCount(unit,"Bih�nder") > 0);
  boolean schwert = (helper.getItemCount(unit,"Schwert") > 0);
  boolean bogen = (helper.getItemCount(unit,"Bogen") > 0);
  boolean armbrust = (helper.getItemCount(unit,"Armbrust") > 0);
  boolean speer = (helper.getItemCount(unit,"Speer") > 0);
  boolean kettenhemd = (helper.getItemCount(unit,"Kettenhemd") > 0);

  ArrayList transporters = new ArrayList();
  transporters.add("x6ct");
  
  helper.addOrder("; Transfer nach Dovin ");

  for (String transporter : transporters) {
    if (helper.unitSeesOtherUnit(transporter)) {
      if (bihaender) {
        helper.addOrder("GIB "+transporter+" ALLES Bih�nder");
      }
      if (schwert) {
        helper.addOrder("GIB "+transporter+" ALLES Schwert");
      }
      if (bogen) {
        helper.addOrder("GIB "+transporter+" ALLES Bogen");
      }
      if (armbrust) {
        helper.addOrder("GIB "+transporter+" ALLES Armbrust");
      }
      if (speer) {
        helper.addOrder("GIB "+transporter+" ALLES Speer");
      }
      if (kettenhemd) {
        helper.addOrder("GIB "+transporter+" ALLES Kettenhemd");
      }

      break;
    }
  }

  unit.setOrdersConfirmed(true);
}
        </pre>
        <hr/>
        <a name="script6"></a>
        <h3>Einheiten ausbilden</h3>
        <p>
          Dies ist ein Script, der es einfach macht, Einheiten auszubilden und sich
          so wenig wie m�glich drum k�mmern zu m�ssen. Dies ist eine Funktion. Ich rufe sie
          bei all meinen Soldateneinheiten auf. Die angegebene Einheit lernt
          entsprechend ihrer bestehenden Talente auf ein bestimmtes Niveau. 
          Ein Beispielaufruf ist weiter unten beschrieben.
        </p>
        <pre class="example">

soldier(Unit unit, int level, String talent, String waffe, 
        boolean taktiker, boolean held, boolean lerne, 
        boolean bewache) {
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

  helper.addOrder("; Soldat lernt in angegebener Reihenfolge");
  helper.addOrder("; folgende Talente:");
  if (taktiker && lerne) helper.addOrder("; lernt T"+level+" Taktik");
  if (lerne) helper.addOrder("; lernt T"+level+" "+talent);
  helper.addOrder("; lernt T"+level+" Ausdauer");
  helper.addOrder("; lernt T1 Reiten");
  if (lerne) helper.addOrder("; lernt T"+level+" Steuereintreiben");

  if (helper.getItemCount(unit,waffe)>0 && bewache) {
    helper.addOrder("BEWACHEN");
  }
}
        </pre>
        <p>
          Hier ein Beispiel f�r den Aufruf der Funktion. Die angegebene
          Einheit soll Stangenwaffen auf T5 lernen. Wenn sie einen Speer
          dabei hat, soll sie automatisch die Region bewachen, in der sie
          sich befindet. Wenn die Einheit bereits T5 Stangenwaffen hat,
          lernt sie T5 Ausdauer, anschlie�end T1 Reiten und falls ihr dann
          langweilig ist, auch noch T5 Steuereintreiben.
        </p>
        <pre class="example">

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
        <hr/>
        <a name="script7"></a>
        <h3>Ganze Regionen best�tigen</h3>
        <p>
          Wenn man in einer Allianz arbeitet und die Reports untereinander teilt, 
          dann ist es nervig, wenn man die Reports der anderen importiert und diese
          Einheiten nicht best�tigt sind. Man macht damit ja nix. Wendet man auf jede
          Region die folgenden Funktion an, so werden alle Einheiten, au�er der eigenen
          best�tigt. Manch einer mag sag, dass kann man mit einem Men�punkt in Magellan
          auch regeln....aber wozu zweimal klicken, wenn einmal reicht.
        </p>
        <pre class="example">

import magellan.library.*;

clearRegion(Region region, String partei) {
  for (Unit unit : region.units()) {
    if (unit.getFaction().getID().toString().equals(partei)) continue;
    unit.setOrdersConfirmed(true);
  }
}
        </pre>
        <p>
         Pro Region ruft man diese Funktion dann wie folgt auf.
        </p>
        <pre class="example">

clearRegion((Region)container,"ntc");
        </pre>
        <p>
         Prinzipiell k�nnte man auch eine Funktion pro Partei-Container
         schreiben. Das geht nat�rlich auch.
        </p>
        <hr/>
        <a name="script8"></a>
        <h3>H�ndler automatisieren</h3>
        <p>
         Dieser Script ist etwas komplexer. Es handelt sich auch wieder
         um eine Funktion, die von einer H�ndler-Einheit aufgerufen
         werden kann. Diese Funktion untersucht, welches Luxusgut in der
         Region gekauft werden kann und kauft das X-fache davon automatisch
         ein. Wenn sie noch andere Luxusg�ter in der Hand hat, dann verkauft
         sie diese. Zum Schlu� sucht sie in der Region noch nach Transport-Einheiten
         und �bergibt ihnen die eingekauften Luxusg�ter der letzten Woche in
         Abh�ngigkeit der in der HashMap �bergebenen Anzahl, bis sie keine
         Waren mehr hat. Mit dieser Funktion und der f�r den Transporter habe
         ich meinen Handelstransport komplett automatisiert und muss mich 
         um nichts mehr k�mmern - au�er das gewonnen Silber ausgeben.
        </p>
        <pre class="example">

import magellan.library.*;
import magellan.library.rules.*;

haendler(Unit haendler, int kaufenFaktor, Map transporters) {
  if (!haendler.isOrdersConfirmed()) {

    Region region = haendler.getRegion();
    ItemType luxuryItem = helper.getRegionLuxuryItem(region);

    // gibt es Luxusg�ter zu kaufen?
    if (region.maxLuxuries() > 0) {
      helper.setOrder(haendler, "; ...");
      Map luxuryPrices = region.getPrices();
      helper.addOrder(haendler, "; --- Warenverkauf ---");
      for (LuxuryPrice price : luxuryPrices.values()) {
        if (price.getPrice()<0) continue; // Wareneinkauf
        List transfer = 
           haendler.getItemTransferRelations(price.getItemType());

        if (haendler.getItem(price.getItemType()) == null 
            && (transfer == null || transfer.size() == 0)) {
          // haben wir nicht
          helper.addOrder(haendler, 
             "; VERKAUFEN ALLES "+price.getItemType().getName());
        } else {
          // haben wir, k�nnen wir vertickern
          helper.addOrder(haendler, 
             "VERKAUFEN ALLES "+price.getItemType().getName());
        }
      }
      helper.addOrder(haendler, "; --- Wareneinkauf ---");
      helper.addOrder(haendler, 
         "KAUFEN "+(region.maxLuxuries()*kaufenFaktor)+
         " "+luxuryItem.getName());
    }

    boolean transfer = false;
    Item item = haendler.getItem(luxuryItem);
    int itemAmount = item.getAmount();

    if (item != null) {
      Iterator iterator = transporters.keySet().iterator();
      helper.addOrder("; --- Waren�bergabe an Transporter ---");
      while (iterator.hasNext()) {
        String transporterId = iterator.next();
        int amount = transporters.get(transporterId);
      
        if (helper.unitSeesOtherUnit(transporterId)) {
          if (amount > itemAmount) amount = itemAmount;
          helper.addOrder(haendler,
             "GIB "+transporterId+" "+amount+
             " "+luxuryItem.getName()+" ; Transfer");
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
        <p>
         Um diesen Script aufzurufen, muss man ihm drei Dinge �bergeben. Das Objekt
         der H�ndler-Einheit. Den Faktor, der beim Einkauf verwendet werden soll und
         eine Liste von Transportern mit deren maximaler Kapazit�t. Im folgenden Beispiel
         kann die Einheit 8h4i 50 Luxusg�ter aufnehmen und der Transporter x6ct 1000.
         Im allgemeinen �bersteigt das die tats�chlich vorhandenen Luxusg�ter in der
         Region und es wird nur der Wert angenommen. Es handelt sich bei den 1.000 also
         um eine Art Alias f�r "GIB ALLES".
        </p>
        <pre class="example">

if (!unit.isOrdersConfirmed()) {

  HashMap transporters = new HashMap();
  transporters.put("8h4i",50);
  transporters.put("x6ct",1000);

  int kaufenFaktor = 3;

  haendler(unit, kaufenFaktor, transporters);
}
        </pre>
        <hr/>
        <a name="script9"></a>
        <h3>Silber horten</h3>
        <p>
         Der folgende Befehl ist wieder einfach. Er zeigt aber, dass
         es m�glich ist, die englische Schreibweise zu verwenden, wenn
         man mit anderen Sprachen au�er Deutsch arbeitet.
        </p>
        <pre class="example">

if (!unit.isOrdersConfirmed()) {
  int silver = helper.getItemCount(unit,"Silver");
  if (silver == 0) silver = helper.getItemCount(unit,"Silber");

  if (silver > 0) {
    helper.addOrder("GIB 8uv9 ALLES Silber");
  }
  unit.setOrdersConfirmed(true);
}
        </pre>
        <hr/>
        <a name="script10"></a>
        <h3>Schilder mit Luxusg�tern aufstellen</h3>
        <p>
          Mit dem nachfolgenden Script kann man zu einer Liste von Regionen
          (nodeList ist eine Liste von RegionIDs) ein Schild setzen, auf dem
          der aktuelle Luxuswarenpreis steht.
        </p>
        <pre class="example">

import magellan.library.*;

for (i = 0; i < nodeList.size(); i++) {
 Region region = world.getRegion(nodeList.get(i));
 if (region.maxLuxuries() > 0) {
   Iterator keyValuePairs = region.getPrices().entrySet().iterator();
   for (j = 0; j < region.getPrices().size(); j++) {
     Map.Entry entry = (Map.Entry) keyValuePairs.next();
     Object key = entry.getKey();
     Object value = entry.getValue();
     String itemName = "key:"+key.toString();
     String itemValue = "value:"+value.getPrice().toString();
     Sign sign = new Sign(itemName+" "+itemValue);
     region.addSign(sign);
   }
 }
}
        </pre>
        <a name="script11"></a>
        <h3>Schilder mit Anzahl der Pferde aufstellen</h3>
        <p>
         Hiermit werden Schilder aufgestellt, die zeigen, wie viele Pferde
         in einer Region stehen.
        </p>
        <pre class="example">

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

