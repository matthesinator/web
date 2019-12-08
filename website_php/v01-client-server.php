<?php
    $topic = 'cs';
    include('includes/header.php');
?>

<h1>Client-Server-Kommunikation im Detail</h1>
				<hr>
				<br>
				<p class="beschreibung">
					<img id="chapter-logo" src="v01-data/logo.png" alt="HTTP Logo" width="30%"  />
					HTTP oder HTTPS sind die meistegenutzten Protokolle für Kommunikation zwischen Client und Server.
					Ohne sie und Sprachen wie HTML, CSS, JavaScript wäre das Internet wie wir es heute kennen unvorstellbar.
					<br>
				</p>

				<a id="skriptlink" href="v01-data/Client-Server-Kommunikation im Detail.pdf" target="_blank">→
					Client-Server-Kommunikation im Detail ←</a>
				<p class="author">
					Autor: Benjamin Mayer
				</p>
				<br><br>
				<div class="leseprobe">
					<div class="center-paragraph">
						<h3 id="netzwerkadressierung">1 Netzwerkadressierung</h3>
					</div>
					<div class="einfuehrung clearfix">
						<p>
							In diesem Kapitel werden Sie die grundlegenden Technologien und Standards kennenlernen, die
							Kommunikation zwischen
							verschiedenen Computern ermöglichen und wie man die Nutzung dieser Technologien
							menschenfreundlich gemacht hat.


						</p>
						<p>Nach diesem Kapitel sollten Sie</p>
						<ul>
							<li>wissen wie sich Computer gegenseitig adressieren und identifizieren</li>
							<li>die einzelnen Teile einer Internetadresse erkennen und nennen können.</li>
						</ul>
					</div>

					<div class="center-paragraph">
						<h4 id="ip-adresse" class="hider"><i class="pfeil-d"></i>1.1 IP-Adresse</h4>
						<p>
							Die IP-Adresse (Internet Protocol Adresse) eines Computers ist analog zur Adresse einer
							Person zu verstehen. Soll ein
							Brief an eine bestimmte Person versendet werden, muss man zuerst herausfinden, unter welcher
							Adresse man diese Person
							findet. Will man einem Computer eine Nachricht schicken braucht man dessen IP-Adresse. Die
							IP-Adresse ist somit eine der
							notwendigen Komponenten, um die Kommunikation zwischen Computern zu ermöglichen. Heutzutage
							sind hauptsächlich zwei
							Versionen der IP-Adressen in Nutzung, IPv4 und IPv6.
						</p>
					</div>

					<div class="center-paragraph">
						<h4 id="ipv4" class="hider"><i class="pfeil-d"></i>1.1.1 IPv4
						</h4>
						<div>
							<figure id="abb1-1-1">
								<img src="v01-data/Abb. 1.1.1.PNG" alt="IPv4-Adresse" width="75%" />
								<figcaption>Abb. 1.1.1: Eine IPv4-Adresse</figcaption>
							</figure>
							<p>
								IPv4 (Internet Protocol Version 4) ist die gängigste Version des Internet Protocols.
								Eine IPv4-Adresse besteht aus vier
								Zahlen zwischen 0 und 255. Dargestellt wird eine solche Adresse durch die vier Zahlen,
								getrennt durch Punkte, wie in
								Abb. 1.1.1 zu sehen.
							</p>
							<p>
								Durch Kombination der vier Zahlen ergibt sich eine Adressraum von über 4 Milliarden
								Adressen. Trotz der großen Anzahl
								von Adressen, sind mittlerweile IPv4-Adressen in Amerika schon knapp (vgl. [HIP4A]) und
								in Europa kann die Institution
								zur Adressverwaltung RIPE (Réseaux IP Européens) überhaupt keine neuen IPv4-Adressen
								ausgeben (vgl. [HIP4E]).
							</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="ipv6" class="hider"><i class="pfeil-d"></i>1.1.2 IPv6
						</h4>
						<div>
							<p>
								IPv6 (Internet Protocol Version 6) ist eine neuere Version des Internet Protocols. Die
								größte Änderung von IPv4 ist die
								Größe der Adresse von 32 Bit auf 128 Bit, wodurch der Adressraum von knapp 4,3
								Milliarden auf 340 Sextillionen erhöht
								wird. Damit wird auf das Problem reagiert, dass man mit 32 Bit nicht genug verschiedene
								IP-Adressen bereitstellen kann,
								um der Nachfrage gerecht zu werden.
							</p>
							<p>
								Wegen ihrer Größe wird die IPv6-Adresse in Hexadezimalen Ziffern dargestellt. Die
								Adresse besteht aus acht Blöcken mit
								je einer hexadezimalen Zahl, welche Werte zwischen 0000 und ffff (dezimal: 0-65535)
								annehmen können. Wie in Abb. 1.1.2
								zu sehen ist, dürfen führende Nullen weggelassen und Blöcke, die nur aus Nullen
								bestehen, komplett ausgelassen werden.
								Das darf jedoch nur einmal in der Adresse gemacht werden, um die Adresse jederzeit
								eindeutig rekonstruieren zu können.
								Außerdem dürfen führende Nullen eines Blocks weggelassen werden.
							</p>
							<figure id="abb1-1-2">
								<img src="v01-data/Abb. 1.1.2.PNG" alt="IPv6-Adressen" width="100%" />
								<figcaption>Abb. 1.1.2: Dieselbe IPv6-Adresse unterschiedlich gekürzt</figcaption>
							</figure>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="sockets-ports" class="hider"><i class="pfeil-d"></i>1.2 Sockets und Ports
						</h4>
						<div>
							<p>
								TCP (Transmission Control Protocol) -Ports ermöglichen, in Kombination mit der
								IP-Adresse, die Kommunikation zwischen
								Client und Server. Mithilfe des Ports (dt. Hafen) wird die genaue Schnittstelle
								angegeben, an der die Kommunikation
								stattfinden soll. Das ermöglicht zwei verschiedene Verbindungen zwischen denselben zwei
								Sockets zu unterscheiden.
							</p>

							<div class="definition">
								<h4>Definition 1.1: Socket</h4>
								<p>
									Eine Socket (dt. Buchse) ist ein Endpunkt bei der Client-Server-Kommunikation. Ein
									Endpunkt ist dabei immer ein
									Computer.
								</p>
							</div>
							<p>
								Eine Portnummer kann überall zwischen 1 und 65535 sein. Diese sind jedoch aufgeteilt wie
								folgt:
								<ul>
									<li>1 – 1023 System bzw. Well-Known Ports</li>
									<li>1024 – 49151 User bzw. Registered Ports</li>
									<li>49152 – 65535 Dynamic bzw. Private oder Ephemeral Ports</li>
								</ul>
								Vgl. [RFCTCP]
								Ein Server öffnet in der Regel Port 80, einer der Well-Known Ports, um Anfragen von
								Clients anzunehmen. An diesem Port
								wartet der Server dauerhaft, bis Anfragen vom Client ankommen.
								Der Client öffnet meist einen zufälligen Port, da er diesen dem Server sowieso mitteilt,
								sobald eine Anfrage vom Client
								an den Server gestellt wird. Will der Client verschiedene Verbindungen mit demselben
								Server parallel aufbauen,
								beispielsweise um verschiedene Dateien gleichzeitig herunterzuladen, kann er neue Ports
								öffnen, auf denen er weitere
								Anfragen an denselben Port 80 des Servers schickt.

							</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="uri" class="hider"><i class="pfeil-d"></i>1.3 URI
						</h4>
						<div class="definition">
							<h4>Definition 1.2: URI</h4>
							<p>
								URI bedeutet Uniform Resource Identifier (dt. einheitlicher Bezeichner für Ressourcen).
								URIs dienen dazu jegliche
								Ressourcen wie Webseiten, Dateien oder Webservices im Internet zu identifizieren.
							</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="syntax" class="hider"><i class="pfeil-d"></i>1.3.1 Syntax</h4>
						<div>
						<p>
							Eine URI beginnt immer mit dem Scheme (dt. Schema) worauf immer ein „:“ folgt. Gibt es eine
							Authority (dt. ein
							Zuständiger) wird dieser mit „//“ eingeleitet. In der Authority steht entweder direkt eine
							IP-Adresse und Port des
							Zuständigen (Server) oder ein Domain Name, der von einem DNS-Server in eine IP-Adresse und
							Port übersetzt wird.
						</p>
						<div class="definition">
							<h4>Definition 1.3: DNS-Server</h4>
							<p>
								Auf DNS (Domain Name Service) -Servern laufen Anwendungen, welche vom Menschen einfach
								lesbar und einprägsame Domain
								Namen (z.B. www.hs-mannheim.de) zusammen mit der dazugehörigen IP-Adresse speichern.
								Wenn diese Domain angefragt wird
								wandelt der DNS-Server den menschenlesbaren Domain Namen in eine IP-Adresse um.
							</p>
						</div>
						<figure id="abb1-3-1a">
							<img src="v01-data/Abb. 1.3.1a.PNG" alt="URI Syntax" width="100%" />
							<figcaption>Abb. 1.3.1a: Syntax-Beispiel einer URI</figcaption>
						</figure>
						<p>
							Der Path (dt. Pfad) nach einer Authority gibt den Pfad zu der Ressource an, die vom Server
							zurückgeschickt werden soll.
							Der Path kann ebenso wie die Authority leer sein. Ist die Authority leer, wird nach Schema
							und „:“ nicht mit „//“
							eingeleitet. Ist die Authority nicht leer, muss der Path entweder leer sein oder mit „/“
							beginnen. Beendet wird der Path
							durch ein „?“ einer Query, ein „#“ eines Fragments oder dem Ende der URI.
						</p>
						<figure id="abb1-3-1b">
							<img src="v01-data/Abb. 1.3.1b.PNG" alt="URI Syntax" width="75%" />
							<figcaption>Abb. 1.3.1b: Eine Query mit zwei Key-Value-Paaren</figcaption>
						</figure>
						<p>
							Eine Query (dt. Anfrage) liefert dem Server Daten in Form von Key-Value-Paaren mit.
							Eingeleitet wird die Query mit „?“
							und Key-Value-Paare werden getrennt durch ein „&“-Zeichen, wie in Abb. 1.3.1b zu sehen.
							Beendet wird die Query mit dem
							Anfang eines Fragments durch „#“ oder dem Ende der URI.
						</p>
						<p>
							Ein Fragment zeigt auf ein bestimmten Element der aufgerufenen Ressource. Somit kann ein
							Webbrowser beispielsweise
							direkt an eine bestimmte Stelle einer Webseite springen und erspart dem User das Suchen bzw.
							Scrollen.
						</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="url-urn" class="hider"><i class="pfeil-d"></i>1.3 URI
						</h4>
						<div>
						<p>
							URL und URN sind Unterkategorien von URI.
						</p>
						<p>
							Ein Uniform Resource Locator (URL, dt. einheitlicher Ressourcenzeiger) ist die am häufigsten
							verwendete Art von URIs.
							Sie zeigen, wo die gewollte Ressource, meist Webseiten, auf dem Server zu finden ist.
						</p>
						<p>
							Die Syntax einer URL folgt denselben Regeln wie die der URI. Im Normalfall ist das genutzte
							Schema entweder HTTP oder
							HTTPS, die beiden Protokolle, um Webseiten im Internet zu verschicken. In diesem Fall folgt
							dem Schema der Domain-Name,
							wie beispielsweise „www.wikipedia.org“, worauf wiederum ein Pfad, dann eine Query und dann
							ein Fragment folgen kann aber
							nicht muss. Ein gesamtes Beispiel wäre dann
							„https://de.wikipedia.org/wiki/Uniform_Resource_Locator#Aufbau“, wobei nur
							eine Query fehlt.
						</p>
						<p>
							Mit einem Uniform Resource Name (URN, dt. einheitlicher Ressourcenname) wird eine bestimmte
							Ressource, wie
							beispielsweise wissenschaftliche Werke, eindeutig und dauerhaft identifiziert. Zu URNs
							gelten alle URIs mit dem Schema
							„urn“. Mit einem Doppelpunkt getrennt folgt auf das Schema ein Namespace Identifier (NID),
							der wiederum mit einem
							Doppelpunkt abgeschlossen wird. Was darauf folgt wird vom jeweiligen Namespace (dt.
							Namesraum) festgelegt. Einer dieser
							Namensräume ist der der Internationalen Standardbuchnummer (ISBN). In diesem Namensraum
							würde eine URI wie folgt
							aussehen: „urn:ISBN:&ltISBN des Buches&gt“. Dies ist jedoch nur einer von vielen möglichen
								Namensräumen.
						</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="zusammenfassung1" class="hider"><i class="pfeil-d"></i>Zusammenfassung
						</h4>
						<div>
						<p>
							In diesem Kapitel wurden die Einzelteile der Netzwerkadresse vorgestellt, deren Nutzen erklärt sowie deren Vor- und Nachteile besprochen. Daraufhin wurde der allgemeine Standard zur Identifikation von Ressourcen im Internet (URI) definiert und anhand von Beispielen erklärt. Letztlich wurde die Syntax der beiden Standards URL und URN erklärt.
						</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="aufgaben1" class="hider"><i class="pfeil-d"></i>Aufgaben zur Selbstüberprüfung
						</h4>
						<div>
						<div class="textbox">
							<h4>Aufgabe 1.1</h4>
							<p>
								Nennen Sie die zwei Versionen der IP-Adresse, welche aktuell in Verwendung sind und geben Sie ein Beispiel für beide.
							</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 1.2</h4>
							<p>
								An welchem Port lauscht ein Server standardmäßig auf Anfragen?
							</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 1.3</h4>
							<p>
								Nennen Sie die fünf Teile einer URI.
							</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 1.4</h4>
							<p>
								Es sollen die beiden Attribute „username“ und „pin“ per URI an den Server übertragen werden. Welcher Teil der URI ist dafür zuständig und wie würde er mit korrekter Syntax aussehen, wenn „username“ den Wert „hschneider“ und „pin“ den Wert „1234“ annehmen soll?
							</p>
						</div>

					</div>

					<div id="datenstrukturen" class="center-paragraph">
						<h3>2 Datenstrukturen</h3>
					</div>
					<div class="center-paragraph">
						<div class="einfuehrung clearfix">
							<p>
								In diesem Kapitel lernen Sie die verschiedenen Sprachen und Metasprachen kennen, die verwendet werden, um Datenstrukturen fest zu definieren. Jede dieser Sprachen spielt eine wichtige Rolle in der Web-Kommunikation oder deren Entwicklung.

							</p>
							<p>Nach diesem Kapitel sollten sie wissen</p>
							<ul>
								<li>für welchen Anwendungszweck die jeweiligen Sprachen gedacht sind</li>
								<li>welche Vor- und Nachteile jede Sprache mit sich bringt</li>
								<li>wie sich die Sprachen entwickelt haben.</li>
							</ul>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="xml" class="hider"><i class="pfeil-d"></i>2.1 XML
						</h4>
						<div>
						<p>
							Die Extensible Markup Language (XML) entstand als Weiterentwicklung von SGML (Standard Generalized Markup Language), einer Meta-Sprache, welche entwickelt wurde, um neue Sprachen zu definieren. XML ist somit also auch eine Metasprache. SGML hat jedoch viele Freiheiten, welche die Sprache für Menschen womöglich verständlicher machen, die es aber schwierig machten, die Sprache vom Computer zu verarbeiten und zu analysieren. Um also eine für Computer besser lesbare Sprache zu entwickeln, wurden strengere Syntaxregeln eingeführt.
						</p>
						<p>
							Jedes XML-Dokument hat denselben Aufbau. Es besteht aus mehreren ineinander geschachtelten Elementen, deren Anfang und Ende mit Tags gekennzeichnet sind. Diese sehen wie folgt aus: Anfang: „&ltexample&gt“, Ende: „&lt/example&gt“. Befindet sich zwischen Anfang- und Endtag kein Inhalt, kann man beide auch zusammenführen: „&ltexample/&gt“. Sind verschiedene Elemente ineinander verschachtelt, muss ein Element immer geschlossen werden, bevor das Elternelement mit einem Endtag geschlossen wird oder ein Nachbarelement mit einem Anfangstag geöffnet wird.
						</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="dom" class="hider"><i class="pfeil-d"></i>2.1.1 DOM-Bäume
						</h4>
						<div>
						<p>
							Weil Elemente in XML so streng strukturiert geschachtelt sind, kann man sie mithilfe eines DOM (Document Object Model) -Baumes darstellen. Dies ist möglich mit jeder Art von Datei, die durch XML oder SGML definiert wurde.
						</p>
						<p>
							Beginnend mit dem Wurzelelement ist jedes Element in der XML-Datei ein Knoten im Baum. Jedes Element, welches in ein anderes Element geschachtelt ist, ist dessen Kind. Veranschaulicht wird dieses Konzept in Abb. 2.1.1, anhand einer XML-Datei, die einen Studenten beschreibt. Im zugehörigen DOM-Baum sieht man, dass das XML-Dokument selbst die Wurzel des Baumes ist. Darin befindet sich das student-Objekt, worin sich wiederum die drei Eigenschaften des Studenten befinden.
						</p>
						<figure id="abb2-1-1">
								<img src="v01-data/Abb. 2.1.1.PNG" alt="XML DOM-Baum" width="100%" />
								<figcaption>Abb. 2.1.1: XML Datei mit zugehörigem DOM-Baum</figcaption>
						</figure>
						</div>
					</div>

					<div class="center-paragraph" width="100%">
						<h4 id="dtd" class="hider"><i class="pfeil-d"></i>2.1.2 DTD
						</h4>
						<div>
						<p>Eine Datentypdefinition (DTD) definiert die Grammatik, an die sich ein XML halten muss, damit das entstandene Dokument dem gewünschten Datentyp entspricht. In der DTD wird angegeben, welche Elemente der Datentyp hat und auf welche Art diese Elemente geschachtelt werden. </p>
						<p>DTDs haben drei verschiedene Typen, die definiert werden können: Elemente, Attribute und Entitäten. Elemente werden durch ELEMENT eingeleitet und können beliebigen Inhalt haben. Entweder sie enthalten weitere Elemente oder sie enthalten #PCDATA (Zeicheninhalte), EMPTY (kein Inhalt) oder ANY (beliebigen Inhalt). Auch Anzahl und Reihenfolge können angegeben werden. Enthält ein Element mehr als ein weiteres Element, können diese mit Klammern gruppiert werden. Die Reihenfolge innerhalb der Klammer wird durch eine mit Kommata getrennte Auflistung festgelegt. Soll es Alternativen geben werden diese jeweils durch „|“ getrennt. Um anzugeben, wie oft ein bestimmtes Element vorhanden ist, werden „*“ für beliebig oft, „+“ für mindestens ein Mal und „?“ für genau ein oder kein Mal, verwendet. Ist keines dieser Zeichen vorhanden, muss das Element genau ein Mal vorhanden sein. Abb. 2.1.2 zeigt eine DTD zum in Abb. 2.1.1 vorgestellten Beispiel, um die Syntax klar zu machen.</p>
						<p>Da jedoch die Syntax der DTDs an reguläre Ausdrücke erinnert und somit nicht leicht lesbar für den Computer war, wurde eine Alternative entwickelt.</p>
						<figure id="abb2-1-2">
								<img src="v01-data/Abb. 2.1.2.PNG" alt="DTD" width="70%" />
								<figcaption>Abb. 2.1.2: DTD zur XML-Anwendung student</figcaption>
						</figure>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="xml-schemata" class="hider"><i class="pfeil-d"></i>2.1.2 DTD
						</h4>
						<div>
						<p>XML-Schemata haben dieselbe Funktion wie DTDs, jedoch mit einigen neuen Möglichkeiten. Anstatt die Grammatik mithilfe regulärer Ausdrücke zu beschreiben wird sie in Form eines XML-Dokumentes definiert. So haben alle Elemente klare Anfangs- und Endtags, die sich leichter vom Computer lesen lassen.</p>
						<p>Mit XML-Schemata kann man zwischen simplen und komplexen Datentypen unterscheiden. Ein simpler Typ nimmt hierbei nur einen der von XML-Schemata gegebenen atomare Datentypen an, während einige Einschränkungen und Grenzwerte definiert werden. Komplexe Datentypen wiederum beinhalten nicht nur einen atomaren Datentyp, sondern einen bis viele Elemente, die selbst von einem atomaren oder auch benutzerdefinierten Datentyp sein können.</p>

						<p>
							XML-Schemata bietet die atomaren Datentypen wie man sie aus anderen Programmiersprachen kennt; String, Decimal, Integer, Float, Boolean, Date, Time und auch einige neue, speziell für XML-Schemata. Durch diese Änderungen lassen sich Datentypen genauer definieren während sie gleichzeitig für Computer einfacher lesbar sind.

						</p>
						<p>
							Im Kontrast zu Abb. 2.1.2 zeigt Abb. 2.1.3 ein XML-Schema zu Abb. 2.1.1.
						</p>
						<figure id="abb2-1-3">
								<img src="v01-data/Abb. 2.1.3.PNG" alt="DTD" width="75%" />
								<figcaption>Abb. 2.1.3: XML-Schema zum Typ student</figcaption>
						</figure>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="html" class="hider"><i class="pfeil-d"></i>2.2 HTML
						</h4>
						<div>
						<p>Die Hypertext Markup Language (HTML) ist eine rein textbasierte Sprache, die zur Strukturierung von online gestellten Dokumenten entwickelt wurde. Definiert wurde sie durch SGML, wodurch sie ähnliche Makel hat. Die Syntax von HTML-Dokumenten ist nicht besonders streng, was es demjenigen, der es schreibt, zwar einfacher macht, da er nicht auf so viele Dinge achten muss. Jedoch hat das zur Folge, dass die Sprache schwieriger von Computern lesbar ist.</p>
						<p>Der generelle Aufbau einer HTML-Datei besteht aus Anfang- und Endtags verschiedener Elemente. Die Tags haben denselben Aufbau wie die eines XML-Dokuments. Die Hauptelemente des HTML-Datentyps sind &lthtml>, &lthead> und &ltbody>. Das &lthtml>-Element ist das Wurzelelement des Dokuments. In ihm befinden sich &lthead> und &ltbody>. </p>
						<p>Im Head kann mit &lttitle> ein Titel angegeben werden oder mit &ltlink>, &ltscript> oder &ltobject> jeweils Beziehungen zu anderen Ressourcen, Code einer Skriptsprache oder externe Dateien angeben bzw. einbinden. Man kann außerdem mit &ltmeta> verschiedene Metadaten des Dokuments angeben und mit &ltstyle> die Darstellung des Dokuments im Browser verändern. Wobei letzteres mittlerweile zwar noch möglich ist wird es jedoch meist in ein Cascading Style Sheet (CSS) ausgelagert, welches durch &ltlink> wieder eingebunden wird.</p>
						<p>Der Body beinhaltet den eigentlichen Inhalt des Dokuments, den Text, der auf der Webseite angezeigt wird. Dieser kann in verschiedenen Elementen aufgeteilt werden, die das letztendlich Aussehen entscheiden. Beispielsweise gibt es verschieden große Überschriften mit &lth1> bis &lth6>, die immer eine Ebene tiefer gehen und mit &ltp> bekommt man einen simplen Paragrafen. Einige Elemente haben auch Attribute, die man im Tag in Form eines Key-Value-Paars mit der Syntax „key=“value“ “ angibt.</p>
						<p>Die Syntax von HTML lässt dem Entwickler jedoch viele Freiheiten. Es ist beispielsweise möglich das Anfang- oder Endtag eines Elements wegzulassen. Bei Elementnamen muss auch nicht auf Groß- und Kleinschreibung geachtet werden. </p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="xhtml" class="hider"><i class="pfeil-d"></i>2.3 XHTML
						</h4>
						<div>
						<p>Nachdem HTML als Anwendung von SGML entstanden ist und SGML mittlerweile von XML mit seiner besseren Syntax überholt wurde, hat man sich überlegt auch HTML auf Basis von XML neu zu definieren. Was dabei entstand ist heute als XHTML (Extenstible HTML) bekannt.</p>
						<p>Da XHTML komplett auf XML-Basis definiert ist, ist zwar die Syntax strenger als bei HTML. Das bedeutet wiederum aber auch, dass XHTML sich, genau wie alle anderen durch XML definierte Sprachen, einfach von Programmen auslesen und verarbeiten lässt.</p>
						<p>Neben vielen kleinen Änderungen sind die wichtigsten Änderungen, die XHTML vornimmt sind Folgende. Alle Tags, die geöffnet werden, müssen auch explizit wieder geschlossen werden. Alle Elemente und Attribute müssen in ausschließlich in Kleinbuchstaben angegeben werden. Die Elemente &lthtml>, &lthead>, &lttitle> und &ltbody> müssen immer angegeben werden. </p>
						<p>Durch die Änderungen in XHTML wird die Syntax zwar verschärft, aber die grundsätzlichen Elemente, Attribute und Verschachtelungsregeln, die in HTML vorhanden waren, sind auch in XHTML vorhanden. In Kombination mit den anderen Vorteilen der Sprache, war dies der Grund dafür, dass der XHTML-Standard in den HTML5-Standard, der neusten Version von HTML, übernommen wurde.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="json" class="hider"><i class="pfeil-d"></i>2.4 JSON
						</h4>
						<div>
						<p>JavaScript Object Notation (JSON) ist neben XML eine weitere Art Datenstrukturen in reinem Text festzuhalten. Es wird hauptsächlich genutzt, um Daten abzuspeichern oder sie zwischen verschiedenen Anwendungen auszutauschen. Jedes JSON-Dokument ist gültiger JavaScript Code, JSON kann jedoch auch durch Einlesen und Interpretieren des reinen Textes in anderen Sprachen ausgelesen werden.</p>
						<p>Auch JSON hat die typischen atomaren Datentypen, die es von JavaScript erbt. Dazu gehören der Nullwert „null“, boolesche Werte „true“ und „false“ sowie Zahlen, Zeichenketten Arrays und auch komplexere Objekte. Objekte werden durch „{“ eingeleitet und enden mit „}“. Sie können Eigenschaften haben, die nach der Syntax „Schlüssel: Wert“ angegeben werden. Schlüssel müssen immer Zeichenketten sein und sollten eindeutig sein. Werte können einer von JSONs Datentypen sein. Abb. 2.4 zeigt die JSON-Syntax anhand desselben Beispiels wie Abb. 2.1.1, um den Vergleich zwischen JSON und XML zu bieten.</p>

						<figure id="abb2-4">
								<img src="v01-data/Abb. 2.4.PNG" alt="JSON" width="60%" />
								<figcaption>Abb. 2.4: JSON zum Object student</figcaption>
						</figure>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="html-xml-json" class="hider"><i class="pfeil-d"></i>2.5 HTML vs. XML vs. JSON
						</h4>
						<div>
						<p>Nachdem nun verschiedene Konzepte der Datenstrukturierung vorgestellt wurden, gilt es deren Vor- und Nachteilen in bestimmten Aspekten zu zeigen.</p>
						<p>HTML ist die Sprache der drei, die am wenigsten flexibel ist, da sie ausschließlich zur Strukturierung von Webseiten gedacht ist. XML und JSON hingegen sind nicht auf einen Datentyp limitiert. Beide Sprachen sind flexibel. Jedoch gibt es auch hier Unterschiede. </p>
						<p>Während beide in der Lage sind beliebige Datenstrukturen zu speichern, hat nur XML die Möglichkeit anhand eines XML-Schemas oder einer DTD die Datenstruktur festzulegen. Somit kann an einer Schnittstelle fest definiert werden, welche Datentypen übertragen werden. Es kann jedoch auch von Vorteil sein diese Einschränkung nicht zu haben. Wenn man also eine flexible Schnittstelle braucht ist JSON besser geeignet. </p>
						<p>Ein weiterer Vorteil von JSON ist, dass jede JSON-Datei per JavaScript mit der Methode eval() evaluiert werden kann. Das bedeutet alle in der JSON-Datei gespeicherten Objekte werden in JavaScript-Objekte umgewandelt. Diese Funktionalität sollte jedoch mit Vorsicht verwendet werden, da so auch schädlicher Code ohne Weiteres ausgeführt wird.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="zusammenfassung2" class="hider"><i class="pfeil-d"></i>Zusammenfassung
						</h4>
						<div>
						<p>
							In diesem Kapitel wurden zunächst die Metasprachen XML und SGML und deren Funnktion vorgestellt. Daraufhin wird beschrieben, wie HTML und XHTML mithilfe von SGML bzw. XML entstanden ist. Zuletzt wird JSON vorgestellt und mit HTML und XML verglichen.
						</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="aufgaben2" class="hider"><i class="pfeil-d"></i>Aufgaben zur Selbstüberprüfung
						</h4>
						<div>
						<div class="textbox">
							<h4>Aufgabe 2.1</h4>
							<p>Gegeben ist folgendes XML-Dokument:</p>
							<figure id="abb-aufgabe-2">
								<img src="v01-data/Abb. Aufgabe 2.1.PNG" alt="JSON" width="40%" />
								<figcaption>Abb. 2.4: JSON zum Object student</figcaption>
						</figure>
							<p>Zeichnen Sie den dazugehörigen DOM-Baum.</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 2.2a</h4>
							<p>
								Geben Sie eine DTD an, die den Datentyp im XML-Dokument von Aufgabe 2.1 definiert.
							</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 2.2b</h4>
							<p>
								Geben Sie ein XML-Schema an, das den Datentyp im XML-Dokument von Aufgabe 2.1 definiert.


							</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 2.3</h4>
							<p>
								Wandeln Sie das XML-Dokument aus Aufgabe 2.1 in ein JSON-Dokument um.
							</p>
						</div>
						</div>
					</div>

					<div id="client-server" class="center-paragraph">
						<h3>3 Client-Server-Kommunikation</h3>
					</div>

					<div class="einfuehrung clearfix">
						<p>
							Dieses Kapitel definiert notwendige Begriffe und zeigt den grundsätzlichen Aufbau der Kommunikation zwischen Client und Server.
						</p>
						<p>Sie sollten nach diesem Kapitel wissen</p>
						<ul>
							<li>wie HTTP Daten überträgt und welche Risiken dies mit sich bringt</li>
							<li>wie HTTPS die Nachteile von HTTP ausbessert</li>
							<li>wie Datenübertragungen ablaufen und wie sie strukturiert sind</li>
							<li>welche Möglichkeiten der Client hat, mit dem Server zu interagieren.</li>
						</ul>
					</div>

					<div class="center-paragraph">
						<h4 id="http" class="hider"><i class="pfeil-d"></i>3.1 HTTP
						</h4>
						<div>
						<p>
							Das Hypertext Transfer Protocol (HTTP) ist ein zustandsloses Protokoll zur Datenübertragung und wird meistens dazu genutzt, Webseiten aus dem Internet in einen Browser zu laden. Um Persistenz in HTTP zu schaffen, muss der Server jedem Client eine Session-ID zuordnen und diese speichern.
						</p>
						<p>
							HTTP ist ein reines Klartextprotokoll, was bedeutet, dass alle Daten, die per HTTP übertragen werden, auf keine Weise verschlüsselt sind und jeder, der sich im selben Netzwerk befindet, diese einfach mitlesen kann. Daher bietet HTTP keine Sicherheit der Daten.
						</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="https" class="hider"><i class="pfeil-d"></i>3.1.1 HTTPS
						</h4>
						<div>
						<p>HTTPS (Hypertext Transfer Protocol Secure) versucht dieses Problem der Sicherheit bei der Datenübertragung zu lösen. Es ist umgesetzt als zusätzliche Schicht zwischen HTTP und TCP. Dort werden die Daten verschlüsselt und eine Authentifizierung findet statt. Dadurch wissen Server und Client wer am anderen Ende der Verbindung ist.</p>
						<p>Die Verschlüsselung der Daten wird mithilfe von Transport Layer Security (TLS, ehemals SSL bzw. Secure Sockets Layer) umgesetzt. TLS besteht selbst aus zwei Hauptkomponenten, das TLS Record Protocol und das TLS Handshake Protocol.</p>
						<p>Das Handshake Protocol authentifiziert die beiden Teilnehmern der Verbindung, ermittelt, welche Kryptographie-Methoden und Parameter genutzt werden, und erstellt die Schlüssel.</p>
						<p>Das Record Protocol nutzt die gegebenen Parameter des Handshake Protocols, um den Datenfluss der beiden teilnehmenden Parteien zu schützen. Vgl. [RFCTLS]</p>
						<p>Da die Verbindung selbst nach diesen Vorkehrungen noch anfällig für Man-in-the-Middle Angriffe ist, muss sich der Server durch ein X.509-Zertifikat authentifizieren. Diese Zertifikate werden von offiziellen Zertifizierungsstellen erteilt. Die meisten Browser erkennen anerkannte Zertifizierungsstellen und vertrauen deren Zertifikate.</p>
						<div class="definition">
								<h4>Definition 3.1: Man-in-the-Middle Angriff</h4>
								<p>
									Ein Angriff, bei dem sich ein Dritter unbemerkt in die Kommunikation einschaltet, sich gegenüber A für B und gegenüber B für A ausgibt – und alle übertragenen Daten mitlesen kann. Vgl. [ITSM]
								</p>
						</div>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="http-nachrichten" class="hider"><i class="pfeil-d"></i>3.1.2 HTTP-Nachrichten
						</h4>
						<div>
						<figure id="abb3-1-2">
								<img src="v01-data/Abb. 3.1.2.PNG" alt="HTTP Request und Response" width="75%" />
								<figcaption>Abb. 3.1.2: Ein HTTP-Request und Response mit Header und Body</figcaption>
							</figure>
						<p>Eine HTTP-Nachricht besteht aus zwei Teilen. Dem Header (Kopf) und dem Body (Körper/Rumpf). </p>
						<p>Der Header enthält mehrere Felder mit Metadaten, wie beispielsweise dem Datentyp, der im Body gesendet wird. Im Beispiel der Abb. 3.1.2 wird eine Textdatei vom Typ HTML übertragen.</p>
						<p>Der Body einer HTML-Nachricht sind die eigentlich zu übertragengenden Daten, in diesem Fall das HTML-Dokument.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="header-felder" class="hider"><i class="pfeil-d"></i>3.1.2.1 wichtige Header-Felder
						</h4>
						<div>
						<p>Es gibt insgesamt fast 50 mögliche Header-Felder für eine HTTP-Nachricht, wovon viele jedoch nicht häufig genutzt werden. Zu den häufig verwendeten gehören: </p>
						<ul>
							<li>Date 			– 	Zeit des Requests oder der Response</li>
							<li>Content-Type 		– 	Der Datentyp nach dem gefragt wird bzw. der geschickt wird</li>
							<li>Content-Length 	– 	Die Größe des Bodys der Nachricht in Byte</li>
							<li>Content-Encoding 	– 	Wie die Datei kodiert wurde</li>
							<li>Last-Modified 		– 	Wann die Daten zuletzt geändert wurden</li>
						</ul>
						<p>Speziell für Request-Nachrichten:</p>
						<ul>
							<li>Host 			–  	Der Domain-Name des Servers</li>
							<li>If-Modified-Since 	–	Server schickt nur die angefragte Datei, falls diese seit dem angegebenen Datum verändert wurde</li>
							<li>Accept-Language 	–	Die Sprachen, die der Client kennt</li>
							<li>User-Agent 		–	Informationen über den Browser des Users</li>
						</ul>
						<p>Speziell für Response-Nachrichten:</p>
						<ul>
							<li>Server 			–	Informationen über den Server </li>
							<li>WWW-Authenticate 	–	Erzwingt eine Authentifizierung</li>
						</ul>
						<p>Vgl. [RFCHF]</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="mime-typen" class="hider"><i class="pfeil-d"></i>3.2 MIME-Typen
						</h4>
						<div>
						<p>MIME (Multi Purpose Internet Mail Extensions) ist ein Standard, um Datentypen anzugeben. Sie werden genutzt, um die Datentypen in einer HTTP-Nachricht zu spezifizieren. </p>
						<p>Die generelle Syntax eines MIME-Typen ist „Medientyp/Subtyp“. Wird eine HTML-Datei versendet ist deren MIME-Typ beispielsweise „text/html“. Bei einem JPEG-Bild wäre es „image/jpeg“. Häufig verwendete Dateien und deren MIME-Typen sind in Tab. 3.2 zu sehen.</p>
						<table>
							<tr><th>Dateityp</th><th>MIME-Typ</th></tr>
							<tr><td>.html</td><td>text/html</td></tr>
							<tr><td>.css</td><td>text/css</td></tr>
							<tr><td>.xml</td><td>text/xml</td></tr>
							<tr><td>.mp4</td><td>audio/mp4</td></tr>
							<tr><td>.jpeg</td><td>image/jpeg</td></tr>
							<tr><td>.mpeg</td><td>video/mpeg</td></tr>
							<tr><td>.pdf</td><td>application/pdf</td></tr>
						</table>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="request-response" class="hider"><i class="pfeil-d"></i>3.3 Request & Response
						</h4>
						<div>
						<p>Die gesamte Client-Server-Kommunikation beruht auf dem Request-Response-Prinzip. Der Client gibt eine URI ein, im Normalfall eine URL, die von einem DNS-Server zur IP-Adresse des Servers umgewandelt wird. Daraufhin wird am für HTTP standardisierten Port 80 des Servers angefragt. Bei der Anfrage schickt der Client seine IP-Adresse und Port mit und lässt den Server so wissen, wohin er die Antwort schicken soll. Da das HTTP-Protokoll zustandslos ist, merkt sich weder Client noch Server mit wem er kommuniziert hat. Deswegen muss bei jeder neuen Nachricht die Adresse mitgeschickt werden.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="request-nachricht" class="hider"><i class="pfeil-d"></i>3.3.1 Request-Nachricht
						</h4>
						<div>
						<p>Eine Request-Nachricht enthält den Namen der Request-Methode, die vollständige URL und den Host. Darauf folgen einige Headerfelder mit Informationen über den Client, die beispielsweise beschreiben, welche Datentypen der Client annimmt oder welchen Browser er verwendet.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="request-methoden" class="hider"><i class="pfeil-d"></i>3.3.1.1 Request-Methoden
						</h4>
						<div>
						<p>Will ein Client eine Request an den Server schicken, gibt es eine Auswahl an Methoden. Einige davon sind seit der erstmaligen Entwicklung von HTTP veraltet und werden nicht mehr genutzt, da sie zu Sicherheitslücken führen.</p>
						<p>Die am häufigsten genutzte HTTP-Methode ist die GET-Methode. Bei einem normalen Aufruf der GET-Methode fragt der Client beim Server nach einer bestimmten Ressource, die er erhalten möchte. Jedoch können mit der GET-Methode auch Parameter in Form von Querys in der URL mitgeschickt werden. Die dadurch übertragenen Daten sollten aber keine sicherheitsrelevanten Informationen enthalten, da sie direkt in der URL stehen. Darüber hinaus sollte eine GET-Methode nie Daten am Server verändern, sondern nur abrufen. Grund dafür, abgesehen davon, dass es so im Protokoll von HTTP definiert ist, ist, dass durch Prefetching eines Browsers oder ähnliche Prozesse, die GET aufrufen, gravierende, ungeplante Nebeneffekte auftreten können.</p>
						<div class="definition">
								<h4>Definition 3.2: Prefetching</h4>
								<p>
									Im Bezug auf Web-Kommunikation ist Prefetching der Prozess, beliebig viele Hyperlinks einer geladenen Webseite auch zu laden, um dem Nutzer die Illusion einer schnelleren Internetverbindung zu geben, da wenn er einen Link nutzt, die Webseite dahinter bereits geladen wurde.
								</p>
							</div>
						<p>Sollen Daten am Server geändert werden, wird die POST-Methode oder die PUT-Methode genutzt.</p>
						<p>Die POST-Methode schickt Daten an die URI, die dann vom Server verarbeitet werden. Der Unterschied zur PUT-Methode besteht darin, dass bei POST der Server die Daten erhält und dann entscheidet, wie er sie verarbeitet. </p>
						<p>Wird PUT verwendet wird die übertragene Ressource, soweit möglich, direkt an die in der URI angegebene Stelle gespeichert. Ist dort bereits etwas gespeichert, wird es von der neuen Ressource überschrieben. Da dies ein zu starker Eingriff auf die Daten des Servers ist, haben heutzutage die meisten Server diese Funktionalität ausgeschaltet. Ebenso wird die Methode DELETE mittlerweile nicht mehr verwendet, da sie dazu dient Ressourcen auf dem Server zu löschen, was ähnlich viel Schaden anrichten kann wie die Fähigkeit mit PUT Ressourcen zu überschreiben.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="response-nachricht" class="hider"><i class="pfeil-d"></i>3.3.2 Response-Nachricht
						</h4>
						<div>
						<p>Hat der Server eine Request von einem Client erhalten und verarbeitet, schickt er eine Response-Nachricht zurück. Da die Verarbeitung einer Request nicht immer erfolgreich ist, sind verschiedene, standardisierte Statuscodes definiert, die der Server in der ersten Zeile seiner Response setzen kann. Diese sind aufgeteilt in fünf Kategorien:</p>
						<ul>
							<li>1xx	-	Informationen</li>
							<li>2xx	-	Erfolgreiche Anfrage</li>
							<li>3xx	-	Umleitung</li>
							<li>4xx	-	Client-Fehler</li>
							<li>5xx	-	Server-Fehler</li>
						</ul>
						<p>Die wichtigsten Statuscodes sind: 200 OK, alles wurde erfolgreich erledigt und die Antwort wurde gesendet; 301 Moved Permanently, die angefragte Ressource ist nicht mehr an dem Ort, wo sie der Client angegeben hat; 304 Not Modified, die angefragte Ressource befindet sich noch im Cache des Clients und wurde seit dem letzten Laden nicht verändert, wird also aus dem Cache geladen; 400 Bad Request, die Anfrage des Clients war fehlerhaft und konnte nicht verarbeitet werden; 401 Unauthorized, der Client ist nicht authentifiziert; 403 Forbidden, der Client ist nicht berechtigt diese Anfrage an diesen Server zu stellen; 404 Not Found, die angefragte Ressource wurde nicht gefunden; 500 Internal Server Error, im Server ist ein unerwarteter Fehler aufgetreten.</p>
						<p>Je nach Status schickt der Server in seiner Response die angefragte Ressource oder, falls ein Fehler aufgetreten ist, Daten, die beim Lösen des Problems helfen. Beispielsweise schickt der Server bei Statuscode 301 Moved Permanently die neue Adresse im „Location“-Header-Feld mit sowie er bei 401 Unauthorized die Authentifizierungsmethode im „WWW-Authenticate“-Header-Feld mitschickt.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="response-nachricht" class="hider"><i class="pfeil-d"></i>3.3.3 Laden einer HTML-Seite
						</h4>
						<div>
						<figure id="abb3-3-3a">
							<img src="v01-data/Abb. 3.3.3a.PNG" alt="Sequenzdiagram einer Webseite" width="50%" />
							<figcaption>Abb. 3.3.3a: Sequenzdiagram des Ladens einer Webseite</figcaption>
						</figure>

						<p>Hat der Client ein HTML-Dokument durch eine GET-Anfrage beim Server erhalten, beginnt er diese zu interpretieren und analysieren. Daraufhin werden weitere Ressourcen per GET angefragt, auf die im HTML-Dokument verwiesen werden. </p>
						<p>Dazu gehört fast immer eine oder mehrere CSS-Dateien und einige Bilder oder Skripte. Diese werden parallel geladen, sobald sie in der Analyse der HTML-Datei entdeckt werden. Werden bei der Analyse der CSS-Datei weitere Bilder gefunden werden auch diese per GET angefragt und geladen. Um den parallelen Download mehrerer Dateien zu gewährleisten, öffnet der Client zusätzliche Ports für jeden Download, an die der Server die angefragten Daten schickt. Der allgemeine Ablauf kann in Abb. 3.3.3a betrachtet werden. Abb. 3.3.3b zeigt wie der Prozess in Echtzeit abläuft. </p>

						<figure id="abb3-3-3b">
								<img src="v01-data/Abb. 3.3.3b.PNG" alt="Laden einer Webseite" width="100%" />
								<figcaption>Abb. 3.3.3b: Laden der Einzelteile einer Webseite in Echtzeit</figcaption>
						</figure>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="sessions" class="hider"><i class="pfeil-d"></i>3.4 Sessions
						</h4>
						<div>
						<p>Da HTTP und HTTPS zustandslose Protokolle sind, sich also keine Informationen über Clients merken, muss man den Zustand eines Clients auf andere Weise speichern. Die womöglich einfachste Lösung wäre per Querys in der URL. Diese Variante ist jedoch sehr unsicher, da sogar der User selbst seine Session-Daten verändern könnte. </p>
						<p>Eine gute Lösung speichert also alle Daten und lässt den User nicht eingreifen. Um diese Voraussetzungen umzusetzen werden Session-Daten auf dem Server gespeichert. Verbindet sich eine Client zum ersten Mal mit der Webseite, wird ihm eine Session-ID zugewiesen. Diese wird zusammen mit jeglichen Daten zur Session auf dem Server gespeichert. Dem Client wird lediglich seine Session-ID mitgeteilt, mit der er sich bei der nächsten Interaktion mit dem Server identifiziert und somit vom Server mit seinen Daten in Verbindung gebracht werden kann.</p>
						<p>Die meisten Sessions sind jedoch zeitlich begrenzt. Dies liegt einerseits daran, dass dann der Speicher für neue Sessions freigegeben werden kann. Andererseits gibt es sicherheitskritische Gründe, Sessions nicht endlos laufen zu lassen. Angreifer haben so weniger Zeit per Brute-Force oder ähnlichen Angriffsmethoden auf Serverdaten zuzugreifen. Dies schützt sowohl Server als auch andere Clients, deren Informationen gestohlen werden könnten. Es gibt zwei verschiedene Arten von Session Timeouts. Je nach Implementierung wird der Client nur ausgeloggt, wenn keine Aktivität mehr zu beobachten ist, oder es ist eine feste Zeit gesetzt, nach deren Ablauf die Session beendet wird. Ersteres ist für den User angenehmer, da, solange er die Webseite nutzt, er nicht auf die Zeit achten muss. Jedoch ist ein fester Session-Timeout sicherer und wird somit meist zusätzlich genutzt.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="zusammenfassung3" class="hider"><i class="pfeil-d"></i>Zusammenfassung
						</h4>
						<div>
						<p>In diesem Kapitel wurde zunächst das Protokoll zur Webkommunikation HTTP vorgestellt. Anhand der Nachteile von HTTP wird die Notwendigkeit der Sicherheitsverbesserungen in HTTPS erklärt.</p>
						<p>Daraufhin wurde in weiterem Detail vorgestellt, wie die Kommunikation zwischen Server und Client abläuft. Es wurden wichtige Begriffe des Protokolls geklärt und Vor- und Nachteile der verschiedenen HTTP-Methoden abgewogen. Darauf folgt der Ablauf beim Laden einer HTML-Seite, um klar zu machen wie das Protokoll in der Praxis abläuft.</p>
						<p>Zuletzt wurde auf die Zustandslosigkeit des HTTP-Protokolls eingegangen und erläutert, wie Server diese umgehen. Es wurde erklärt wie Sessions umgesetzt werden und welche Risiken dabei entstehen.</p>
						</div>
					</div>

					<div class="center-paragraph">
						<h4 id="aufgaben3" class="hider"><i class="pfeil-d"></i>Aufgaben zur Selbstüberprüfung
						</h4>
						<div>
						<div class="textbox">
							<h4>Aufgabe 3.1</h4>
							<p>
								Wieso ist HTTP nicht sicher?
							</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 3.2</h4>
							<p>
								Aus welchen zwei Hauptbestandteilen besteht eine HTTP-Nachricht und was ist in ihnen enthalten?
							</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 3.3</h4>
							<p>
								Nennen Sie drei HTTP-Methoden und erläutern Sie was diese tun.
							</p>
						</div>
						<br>
						<div class="textbox">
							<h4>Aufgabe 3.4</h4>
							<p>
								Wie werden Sessions von den meisten Servern umgesetzt?Es sollen die beiden Attribute „username“ und „pin“ per URI an den Server übertragen werden. Welcher Teil der URI ist dafür zuständig und wie würde er mit korrekter Syntax aussehen, wenn „username“ den Wert „hschneider“ und „pin“ den Wert „1234“ annehmen soll?
							</p>
						</div>
						</div>
						</div>

						<div id="loesungen" class="center-paragraph">
							<h3>A Lösungen der Übungsaufgaben</h3>
						</div>

						<div class="center-paragraph">
							<h4 id="loesungen1" class="hider"><i class="pfeil-d"></i>Netzwerkadressierung</h4>
							<div>
							<div class="textbox">
								<h4>Aufgabe 1.1</h4>
								<p>
									IPv4:	beispielsweise 206.34.0.168
								</p>
								<p>IPv6:	beispielsweise 03c4:8a35:0003:0000:0000:003d:0000:0000</p>
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 1.2</h4>
								<p>
									Port 80
								</p>
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 1.3</h4>
								<p>
									Schema, Authority, Path, Query, Fragment
								</p>
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 1.4</h4>
								<p>
									Query: ?username=hschneider&pin=1234
								</p>
							</div>
							</div>
						</div>

						<div class="center-paragraph">
							<h4 id="loesungen2" class="hider"><i class="pfeil-d"></i>Datenstrukturen</h4>
							<div>
							<div class="textbox">
								<h4>Aufgabe 2.1</h4>
								<img src="v01-data/Abb. Lösung 2.1.PNG" alt="Lösung Aufgabe 2.1" width="25%">
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 2.2a</h4>
								<img src="v01-data/Abb. Lösung 2.2a.PNG" alt="Lösung Aufgabe 2.2a" width="50%">
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 2.2b</h4>
								<img src="v01-data/Abb. Lösung 2.2b.PNG" alt="Lösung Aufgabe 2.2b" width="50%">
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 2.3</h4>
								<img src="v01-data/Abb. Lösung 2.3.PNG" alt="Lösung Aufgabe 2.3" width="50%">
							</div>
							</div>
						</div>

						<div class="center-paragraph">
							<h4 id="loesungen3" class="hider"><i class="pfeil-d"></i>Client-Server-Kommunikation</h4>
							<div>
							<div class="textbox">
								<h4>Aufgabe 3.1</h4>
								<p>Wird HTTP als Protokoll genutzt, werden alle Daten unverschlüsselt als Klartext übertragen. Dadurch kann jeder, der im selben Netzwerk befindet, beliebig Daten mitlesen oder verändern.</p>
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 3.2</h4>
								<p>Head/Kopf: Im Kopf werden Metadaten übertragen.</p>
								<p>Body/Körper/Rumpf: Im Rumpf werden die eigentlichen Daten übertragen.</p>
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 3.3</h4>
								<p>GET:	Fragt beim Server eine Ressource an.</p>
								<p>POST:	Übergibt dem Server eine Ressource zum Verarbeiten.</p>
								<p>PUT:	Speichert eine Ressource an die in der URI angegebene Stelle.</p>
								<p>DELETE:	Löscht eine Ressource des Servers.</p>
							</div>
							<br>
							<div class="textbox">
								<h4>Aufgabe 3.4</h4>
								<p>Der Server gibt jedem Client eine Session-ID und speichert diese mit den Session-Daten des Clients ab. Jede Anfrage, die am Server ankommt, kann dann anhand der Session-ID mit einem Client in Verbindung gebracht werden.</p>
							</div>
							</div>
						</div>

						<div id="literatur" class="center-paragraph">
							<h3>B Literaturverzeichnis</h3>
							<div>
								<p><strong>[HIP4A]</strong> E. Ahlers, IPv4-Adress-Pool in Nordamerika endgültig erschöpft | heise online, &lthttps://www.heise.de/newsticker/meldung/IPv4-Adress-Pool-in-Nordamerika-endgueltig-erschoepft-2826871.html> (19.11.2019)</p>
								<p><strong>[HIP4E]</strong> D. AJ Sokolov, Das war’s mit IPv4-Adressein in Europa | heise online, &lthttps://www.heise.de/newsticker/meldung/Das-war-s-mit-IPv4-Adressen-in-Europa-4596197.html> (1.12.2019)</p>
								<p><strong>[RFCTCP]</strong> M. Cotton, L. Eggert, J. Touch, M. Westerlund, S. Cheshire, RFC6335 - Internet Assigned Numbers Authority (IANA) Procedures for the Management of the Service Name and Transport Protocol Port Number Registry, ISSN 2070-1721, &lthttps://tools.ietf.org/html/rfc6335#section-6> (21.11.2019)</p>
								<p><strong>[RFCHF]</strong> R. Fielding, J. Gettys, J. Mogul, H. Frystyk, L. Masinter, P. Leach, T. Berners-Lee, RFC 2616 -  Hypertext Transfer Protocol -- HTTP/1.1, &lthttps://tools.ietf.org/html/rfc2616#section-14> (30.11.2019)</p>
								<p><strong>[ITSM]</strong> H. Kersten, G. Klett, Der IT Security Manager, 4. Auflage, Springer Vieweg, Wiesbaden, 2015, ISBN 978-3-658-09973-2, ISBN (eBook) 978-3-658-09974-9</p>
								<p><strong>[RFCTLS]</strong> E. Rescorla, RFC 8446 – The Transport Layer Security (TLS) Protocol Version 1.3, &lthttps://tools.ietf.org/html/rfc8446#section-1> (1.12.2019) </p>
							</div>
						</div>

						<div id="abbildungen" class="center-paragraph">
							<h3>C Abbildungsverzeichnis</h3>
							<div>
								<p><strong>[Abb. 1.3.1a]</strong> T. Berners-Lee, R. Fielding, L. Masinter, RFC3986 – Uniform Resource Identifier (URI): Generic Syntax, &lthttps://tools.ietf.org/html/rfc3986#section-3> (29.11.2019)</p>
								<p><strong>[Abb. 3.1.2]</strong> HTTP-Anfrage.svg &lthttps://upload.wikimedia.org/wikipedia/commons/f/f9/HTTP-Anfrage.svg> (27.11.2019)</p>
								<p><strong>[Abb. 3.3.3a]</strong> F. Dopatka, Grundlagen der Web-Technologien (1.12.2019)</p>
							</div>
						</div>

					</div>
				</div>





<?php
    include('includes/footer.php');
?>