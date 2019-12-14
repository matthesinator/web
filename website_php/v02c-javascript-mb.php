<?php
$topic = 'js-mb';
include('includes/header.php');
?>   
          <div class="content-container">
            <div class="content-left">
                <nav class="contentnav">
                    <ul>
                        <li><a href="#intro">1 Übersicht und Geschichte von JavaScript</a></li>
                        <li><a href="#strukturen">2 JavaScript Grundstrukturen</a></li>
                        <li><a href="#events">3 Event-Handling</a></li>
                        <li><a href="#dom">4 Zugriff auf den DOM-Baum</a></li>
                        <li><a href="#debug">5 Debugging über Browsertools</a></li>
                        <li><a href="#jquery">6 Ausblick auf dasjQuery Framework</a></li>
                        <hr>
                        <li><a href="#loesungen">A Lösungen</a></li>
                        <li><a href="#literatur">B Literaturverzeichnis</a></li>
                        <li><a href="#abbildungen">C Abbildungsverzeichnis</a></li>
                        <li><a href="#tabellen">D Tabellenverzeichnis</a></li>
                        <li><a href="#codes">E Codeverzeichnis</a></li>
                    </ul>
                </nav>
            </div>

            <div class="content-center">
                <h1>Die Sprache JavaScript im Detail</h1>
                <hr>
                <br>
                <p class="beschreibung">
                    <img id="chapter-logo" src="v02c-data/javascript-logo.png" alt="JavaScript Logo" width="15%" /> JavaScript ist für die Entwicklung dynamischer Webseiten unerlässlich. Es ergänzt dabei andere Sprachen wie HTML und CSS. Dieses Skript
                    soll ein Grundverständnis für die Sprache schaffen.
                    <br>
                </p>
                <a id="skriptlink" href="v02cmb-data/JavaScript.pdf" target="_blank">→ JavaScript ←</a>
                <p class="author">
                    Autor: Maximilian Broszio
                </p>
                <br><br>
                <div class="leseprobe">
                    <div class="center-paragraph">
                        <h3 id="intro">1 Übersicht und Geschichte von JavaScript</h3>
                    </div>
                    <div class="einfuehrung clearfix">
                        <p>
                            Dieses Kapitel ist eine Einführung in JavaScript und soll einen Überblick über diese Programmiersprache sowie deren Entstehung geben. Anschließend wird aufgezeigt wie man JavaScript in HTML-Dokumente einbinden kann und welche Variante zu bevorzugen ist.
                            Weiterhing wird auf die Objektorientiertheit von JavaScript und die Unterschiede zu Java eingegangen. <br> Nach dem durcharbeiten dieses Kapitels, sollten Sie in der Lage sein, folgende Fragestellungen
                            zu beantworten:
                        </p>
                        <ul>
                            <li>Was ist ECMAScript und wie steht es mit JavaScript im Zusammenhang?</li>
                            <li>Wie bindet man JavaScript in eine Website ein?</li>
                            <li>Wofür benutzt man JavaScript?</li>
                            <li>Wie ist JavaScript typisiert?</li>
                            <li>Wie unterscheidet sich JavaScript von Java in Sachen Objektorientiertheit?</li>
                        </ul>
                    </div>

                    <div class="center-paragraph">
                        <h4 class="hider"><i class="pfeil-d"></i>1.1 Entstehung und Standardisierung von JavaScript</h4>
                        <div>
                            <p>
                                JavaScript ist eine Turing-vollständige und somit vollwertige Programmiersprache die 1995 von Brendan Eich, der damals bei dem amerikanischen Softwareunternehmen „Netscape Communications“ gearbeitet hatte, entwickelt wurde. Dort wurde Ihm aufgetragen
                                eine neue Programmiersprache innerhalb von zehn Tagen zu entwickeln, die in Netscape Navigator, dem Browser des Unternehmens, lauffähig ist. Diese neue Sprache sollte von der Syntax an Java angelehnt, aber bei weitem nicht
                                so umfangreich sein (vgl. [Sev12, S. 7-8]). Das heutige JavaScript ist eine Implementation des ECMA-262 Standards, welcher die Skriptsprache ECMAScript spezifiziert. ECMAScript selbst wurde 1996 basierend auf den damals
                                vorherrschenden Technologien JavaScript und JScript von Microsoft, entworfen. (vgl. [Ecm19a])
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 class="hider"><i class="pfeil-d"></i>1.2 Verwendung von JavaScript</h4>
                        <div>
                            <p>
                                Der damalige Hauptgrund für die Entwicklung von JavaScript war es die bestehenden Möglichkeiten von HTML und CSS durch dynamisches HTML zu erweitern. Es ermöglicht durch Manipulation des DOM-Baumes HTML- und CSS-Code dynamisch zu generieren, bestehenden
                                Code zu verändern und so auf Benutzerinteraktionen zu reagieren. Weiterhin ist JavaScript hardwareunabhängig und daher vielseitig einsetzbar. Heutzutage kann man mit entsprechenden Frameworks und Libraries, wie zum Beispiel
                                Node.js, JavaScript auch serverseitig zum Einsatz zu bringen. JavaScript kann über verschiedene Wege in ein HTML-Dokument eingebunden werden. Der JavaScript Code kann direkt innerhalb des HTML-Dokumentes, oder in einer
                                externen JavaScript Datei eingefügt werden. Beides geschieht über den HTML &lt;script&gt;-Tag. Manche JavaScript Funktionen können auch direkt inline als Attribut zu HTML-Elementen hinzugefügt werden. Das direkte einfügen
                                von JavaScript Code in das HTML-Dokument ist schlechter Stil, da es schnell zu einem unübersichtlichen Dokument führt und HTML nur der Strukturierung von Texten, Bildern und Links dient. Deshalb ist es zu bevorzugen den
                                JavaScript Code in eine separate Datei auszulagern und diese im &lt;script&gt;-Tag mit dem src-Attribut zu referenzieren.
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 class="hider"><i class="pfeil-d"></i>1.3 Eigenschaften von JavaScript</h4>
                        <div>
                            <p>
                                Dieses Unterkapitel stellt wesentliche Eigenschaften von JavaScript dar und vergleicht diese mit Java.
                            </p>
                            <h4 class="hider"><i class="pfeil-d"></i>1.3.1 Objektorientierung</h4>
                            <p>
                                JavaScript unterscheidet sich von klassischen objektorientierten Programmiersprachen wie Java, da Klassen zwar existieren, aber die Sprache nicht auf ihnen basiert. In Java sind Klassen zwingend erforderlich, um Objekte zu erzeugen. Java Objekte bilden
                                Instanzen der vorher definierten Klassen. In den Java Klassen werden die Eigenschaften und das Verhalten, sprich die Methoden, der Objekte fest definiert. In JavaScript sind Objekte flexibler. Ihnen können weitere Eigenschaften
                                und Methoden auch nach der Erstellung zugewiesen, oder bereits vorhandene Eigenschaften und Methoden entfernt werden. Des Weiteren hat jedes Objekt ein sogenanntes Prototyp-Objekt, von dem es erbt. Dieses Prototyp-Objekt
                                stellt Eigenschaften und Methoden für die davon erbenden, weiteren Objekte, zu Verfügung. Bei einem neu erstellten Objekt-Literal ist dies der Prototyp des globalen Objektes Object, welches zum Beispiel die toString-Methode
                                bereitstellt. In Java ist das Äquivalent zu diesem Objekt die Object-Klasse, von der jede Java Klasse erbt und auf deren Methoden jedes Objekt Zugriff hat. Erstellt man Objekte in JavaScript über eine Konstruktor- Funktion,
                                kann man den Prototypen der Konstruktor-Funktion modifizieren und so, Eigenschaften und Methoden für alle Objekte dieses Typs festlegen. Möchte man auf Eigenschaften oder Methoden eines Objektes zugreifen welche aber nicht
                                für das Objekt definiert sind, wird im Prototyp danach gesucht.
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="zusammenfassung-1" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                        <div>
                            <p>
                                Nach diesem Kapitel sollte man einen groben Überblick über die Entstehungsgeschichte von JavaScript und ECMAScript erlangt haben. Außerdem wurde darauf eingegangen wie man JavaScript im Zusammenhang mit HTML-Dokumenten verwendet und wie sich die Objektorientiertheit
                                von JavaScript von Java unterscheidet.
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="uebungen-1" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                        <div>
                            <p class="uebung">
                                Aufgabe 1.1<br> Wie kann man JavaScript in ein HTML-Dokument einbinden und welche Variante ist zu bevorzugen?
                            </p>
                            <p class="uebung">
                                Aufgabe 1.2<br> Wie ist JavaScript typisiert und welche Vorteile/Nachteile hat dieses Schema?
                            </p>

                            <p class="uebung">
                                Aufgabe 1.3<br> Was sind Prototypen in JavaScript?
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h3 id="strukturen">2 JavaScript Grundstrukturen</h3>
                    </div>
                    <div class="einfuehrung clearfix">
                        <p>
                            In diesem Kapitel werden die verschiedenen Sprachelemente von JavaScript erläutert und mit anderen Programmiersprachen verglichen. <br> Nach dem durcharbeiten dieses Kapitels, sollten Sie in der Lage sein, folgende Fragestellungen
                            zu beantworten:
                        </p>
                        <ul>
                            <li>Was für Datentypen existieren in JavaScript und wie läuft die Typumwandlung ab?</li>
                            <li>Wie ist der Scope von Variablen?</li>
                            <li>Was versteht man unter Hoisting?</li>
                            <li>Was für Kontrollstrukturen existieren in JavaScript?</li>
                            <li>Wie werden Funktionen definiert und was ist mit ihnen möglich?</li>
                            <li>Wie funktionieren Vererbung und Attribut-Zugriffschutz im Vergleich zu Java?</li>
                        </ul>
                    </div>

                    <div class="center-paragraph">
                        <h4 class="hider"><i class="pfeil-d"></i>2.1 Datentypen, Variablen und Datenstrukturen</h4>
                        <div>
                            <p>
                                In diesem Unterkapitel werden die verschiedenen JavaScript Datentypen erläutert und dargestellt wie Typumwandlungen gehandhabt werden. Des Weiteren wird der Scope der Variablen, deren Truthiness und Hoisting thematisiert.
                            </p>
                            <h4 class="hider"><i class="pfeil-d"></i>2.1.1 Datentypen</h4>
                            <div>
                                <p>
                                    Es existieren sechs primitive Datentypen in JavaScript: String, Boolean, Number, Null, Undefined und Symbol. Des Weiteren gibt es noch den abstrakten Datentyp Object. Von all diesen Datentypen, außer Null und Undefined, können Instanzen mit einem Konstruktor
                                    erstellt werden. Im Gegensatz zu anderen Programmiersprachen wird in JavaScript nicht zwischen Integer, Float und anderen Zahlen-Datentypen unterschieden. Number repräsentiert immer einen 8-Byte Wert entsprechend dem
                                    Format einer Zahl in doppelter Genauigkeit nach IEEE 754. Neben Ganzzahlen und Gleitkommazahlen kann Number auch symbolische Werte wie positive und negative Infinity, sowie NaN (Not a Number) annehmen (vgl. [Ecm19b]).
                                    Die Typen Undefined und Null haben jeweils nur einen Wert, undefined und null. Der Unterschied zwischen ihnen besteht darin, dass jede var-Variable den Wert undefined besitzt, bis sie initialisiert wird. Der Wert repräsentiert
                                    etwas nicht definiertes. Der Wert null hingegen steht für eine gewollte Absenz eines Wertes. <br><br> Der Symbol-Datentyp ist aus anderen Skriptsprachen wie Ruby bekannt und verhält
                                    sich dort wie in JavaScript. Eine Symbol-Instanz ist ähnlich wie ein String, allerdings ist ein Symbol einzigartig und somit niemals gleich. Bei der Erstellung einer Symbol-Instanz kann dem Konstruktor eine optionale
                                    Beschreibung für das Symbol übergeben werden. <br><br> Typumwandlungen in JavaScript werden, wenn benötigt, implizit und automatisch durchgeführt. Allerdings existieren Funktionen, um Datentypen manuell zu konvertieren.
                                    So wird auch bei den Vergleichsoperatoren zwischen einem strikten und einem Typ konvertierenden Operator unterschieden. Der == Operator wandelt die Operanden erst in den gleichen Typ um, bevor sie verglichen werden,
                                    während der === Operator den Wert und den Typ ohne vorherige Konvertierung vergleicht. Deshalb ergeben die Ausdrücke in der folgenden Abbildung unterschiedliche Ergebnisse:
                                </p>
                                <figure id="abb2-1">
                                    <img src="v02cmb-data/equal_Operator_vergleichpng.png" alt="Abbildung Vergleichsoperator Test" width="90%" border="1px solid" />
                                    <figcaption>Abbildung 2.1: Vergleichsoperator Test</figcaption>
                                </figure>
                                <p>
                                    Der == Operator konvertiert den String ‘5‘ erst zu einer Number und vergleicht diese dann mit dem Operanden, deshalb ist das Resultat true. Der === Operator vergleicht den Wert und den Typ der Operanden. In diesem Fall sind die Typen String und Number,
                                    daher wird false zurückgegeben.
                                </p>
                            </div>
                            <h4 class="hider"><i class="pfeil-d"></i>2.1.2 Truthiness</h4>
                            <p>
                                Operatoren und Kontrollstrukturen, die mit booleschen Werten arbeiten, wie zum Beispiel if-Anweisungen, können in JavaScript auch Werte, die nicht vom Typ Boolean sind, evaluieren, da eine automatisch Typumwandlung zu Boolean durchgeführt wird. In JavaScript
                                entsprechen false, NaN, null, undefined, 0, -0 und Leere Strings dem booleschen Wert false. Alle anderen Werte entsprechen dem booleschen Wert true.
                            </p>
                            <h4 class="hider"><i class="pfeil-d"></i>2.1.3 Scope von Variablen</h4>
                            <div>
                                <p class="definition">
                                    Definition 2.1: <br>In JavaScript bezeichnet der Scope den Bereich, in dem Ausdrücke sichtbar sind und auf sie zugegriffen werden kann.
                                </p>
                                <p>
                                    Für Variablen, die mit dem Schlüsselwort var deklariert werden, unterscheidet man zwischen dem globalen und lokalen Scope. Auf Variablen, die innerhalb des globalen Scopes deklariert werden, kann von überall im Programm aus zugegriffen werden. Auf Variablen,
                                    die innerhalb einer Funktion deklariert werden, kann man nur lokal, also innerhalb der Funktion, zugreifen. Jede Funktion bildet ihren eigenen lokalen Scope, während der globale Scope alle Funktionen umschließt. In
                                    anderen Programmiersprachen wie zum Beispiel Java, bilden Kontrollstrukturen wie if-Anweisung oder Schleifen einen Block Scope. Die darin deklarierten Variablen sind außerhalb des Blockes nicht adressierbar, auch nicht
                                    innerhalb des Funktionseigenen lokalen Scopes. In JavaScript existiert dieser Scope nur für Variablen, die mit dem Schlüsselwort let oder const deklariert wurden. Lokale Variablen, die mit let deklariert werden, existieren
                                    ebenso in der funktionalen Programmiersprache LISP. Dort sind sie ebenfalls dazu gedacht Variablen innerhalb eines lokalen Scopes zu erzeugen.
                                </p>
                            </div>
                            <h4 class="hider"><i class="pfeil-d"></i>2.1.4 Hoisting</h4>
                            <div>
                                <p>
                                    In JavaScript kann auf Variablen und Funktionen zugegriffen werden bevor diese deklariert wurden. Dies funktioniert, da der JavaScript Interpreter Hoisting (engl., ‚hochziehen‘) anwendet. Der Interpreter durchsucht die Funktion auf lokal deklarierte Variablen
                                    und ‚zieht‘ diese unter den Funktionskopf. Ebenso ‚zieht‘ er Funktionsdeklarationen nach oben, auch innerhalb des globalen Scopes. Existiert eine Variable, die im globalen Scope deklariert wurde und eine gleichnamige
                                    lokale Variable, wird die lokale Variable ‚gehoisted‘ und überdeckt die globale Variable, auch wenn diese noch nicht initialisiert und somit undefined ist. Dieses Verhalten kann leicht zu Fehlern führen.
                                </p>
                                <figure id="abb2-2">
                                    <img src="v02cmb-data/hoisting.png" alt="Abbildung Hoisting" width="70%" border="1px solid" />
                                    <figcaption>Abbildung 2.2: Hoisting anhand von let Variablen</figcaption>
                                </figure>
                                <p>
                                    Wie die obige Abbildung zeigt kann auf let Variablen nicht vor der Deklaration zugegriffen werden. Beim Zugriff wird ein ReferenceError ausgegeben. Weiterhin kann man erkennen, dass derselbe Code mit einer var Variablen, undefined ausgibt. Dies liegt
                                    daran, dass die Deklaration von varTest unter den Funktionskopf gezogen wurde und somit der Zugriff darauf möglich ist, da var Variablen immer mit undefined initialisiert sind. Die eigentliche Initialisierung mit 4
                                    wird nicht „gehoisted“, somit wird undefined ausgegeben. Anders als var-Variablen werden let- und const-Variablen zwar „gehoisted“, sind aber noch nicht initialisiert (vgl. [Moz19a]).
                                </p>
                            </div>
                            <h4 class="hider"><i class="pfeil-d"></i>2.1.5 Arrays</h4>
                            <div>
                                <p>
                                    In einem Array können viele verschiedene Werte gespeichert und über eine einzige Variable adressiert werden. Auf die einzelnen Werte kann man dann über einen Index oder Schlüssel zugreifen. Indexierte Arrays starten mit dem Index 0. Dieser Index erhöht
                                    sich mit jedem weiteren Datenfeld. Anstatt eines Indizes kann man auch einen String als Schlüsselwert nutzen und so den einzelnen Werten Namen geben, anstatt sie durchzunummerieren. Diese Art von Arrays werden auch
                                    <b>assoziative Arrays</b> genannt und „[…] bilden in JavaScript zugleich die Basis des Datentyps Object“ [Bew18, S.91]. Ein gemischtes Array, das Schlüssel und Indizes für den Zugriff auf Werte nutzt ist auch möglich.
                                    Aufgrund der dynamischen Typisierung können JavaScript Arrays auch Werte mit unterschiedlichen Datentypen aufnehmen. In statisch typisierten Programmiersprachen wie Java, wird der Datentyp des Arrays bei der Deklaration
                                    festgelegt. So kann in Java ein Array des Typen String auch nur Strings enthalten. In JavaScript kann ein Array Strings, Numbers und Werte anderer Typen beinhalten. Arrays in JavaScript haben auch keine vorher definierte
                                    Länge, was in Java wiederrum der Fall ist, sondern die Größe verändert sich dynamisch. <br><br> In JavaScript gibt es verschiedene Möglichkeiten ein Array zu erzeugen. Die erste Möglichkeit ist, das Array als Literal
                                    zu erzeugen. Die zweite Möglichkeit ist das Array über eine Konstruktor-Funktion zu erstellen. Hierfür wird das Schlüsselwort new verwendet. Um ein leeres Array zu erzeugen, können bei beiden Möglichkeiten die Klammern
                                    leer gelassen werden. Folgend ist die Syntax der beiden Möglichkeiten abgebildet:
                                </p>
                                <figure id="syntax2-1">
                                    <p class="syntax">
                                        <i>var</i> array = [Wert, Wert, …];<br>
                                        <i>var</i> array = new Array( Werte );
                                    </p>
                                    <figcaption>Syntax Beispiel 2.1: Erstellung von Arrays</figcaption>
                                </figure>
                                <P>
                                    Bei der Erstellung über den Konstruktor muss beachtet werden, dass bei Übergabe eines einzigen Number-Wertes, nicht ein Array mit genau diesem Wert als Inhalt, sondern ein Array mit genau dieser Länge erzeugt wird. Dies wird in folgender Abbildung aufgezeigt:
                                </P>
                                <figure id="abb2-3">
                                    <img src="v02cmb-data/ArrayKonstruktor.png" alt="Abbildung Arrayerzeugung" width="50%" border="1px solid" />
                                    <figcaption>Abbildung 2.3: Beispiel der Arrayerzeugung über den Konstruktor</figcaption>
                                </figure>
                                <p>
                                    array2 wird durch einen Konstruktor-Aufruf mit der Zahl 5 erzeugt. Dadurch entsteht ein Array mit fünf leeren Feldern, also Felder vom Typ undefined. Die anderen beiden Arrays werden ebenfalls über den Konstruktor erzeugt, allerdings werden im Falle von
                                    array1 mehrere Werte und im Falle von array3 ein String übergeben.<br> Ein assoziatives Array erzeugt man über die Objekt-Notation oder mit dem oben aufgeführten Konstruktor, wobei
                                    die Klammern leer und die Schlüssel/Wert-Paare einzeln aufgeführt werden müssen:
                                </p>
                                <figure id="syntax2-2">
                                    <p class="syntax">
                                        <i>var</i> array = { “name1“ : Wert; “name2“ : Wert; … }<br>

                                        <i>var</i> array = new Array(); array[“name“] = Wert; …
                                    </p>
                                    <figcaption>Syntax Beispiel 2.2: Erstellung von assoziativen Arrays</figcaption>
                                </figure>
                            </div>
                        </div>
                        <h4 class="hider"><i class="pfeil-d"></i>2.2 Kontrollstrukturen</h4>
                        <div>
                            <p>Dieses Unterkapitel wird näher auf verschiedene in JavaScript existierende Kontrollstrukturen, wie Verzweigungen und Schleifen eingehen.</p>
                            <h4 class="hider"><i class="pfeil-d"></i>2.2.1 Verzweigungen</h4>
                            <div>
                                <p>
                                    <b>If-Anweisungen</b><br>Mit der if-Anweisung können Code Segmente abgegrenzt und nur unter einer Bedingung, die durch einen booleschen Wert repräsentiert wird, ausgeführt werden. Der boolesche Wert kann das Ergebnis
                                    eines Vergleichs, eine Variable oder aber auch ein Literal, das durch eine automatische Typumwandlung zu einem booleschen Wert konvertiert wird, sein.
                                    <br>Die Syntax der If-Anweisung ist wie folgt festgelegt:
                                </p>
                                <figure id="syntax2-3">
                                    <p class="syntax">
                                        <i>if</i> (Bedingung) { Anweisungen } <i>else</i> { Anweisungen }
                                    </p>
                                    <figcaption>Syntax Beispiel 2.3: If-Anweisung</figcaption>
                                </figure>
                                <p>
                                    Die nach dem if-Block folgende else-Anweisung ist optional. Sie wird immer dann ausgeführt, wenn die Bedingung der if-Anweisung false ergibt. Die Anweisungssegmente bilden einen eigenen Block innerhalb der geschweiften Klammern und sind somit für let
                                    Variablen ein eigener Block Scope. Das if-Anweisungskonstrukt kann auch durch den ternären Operator, gekennzeichnet durch ein Fragezeichen, abgekürzt werden. Dessen Syntax sieht wie folgt aus:
                                </p>
                                <figure id="syntax2-4">
                                    <p class="syntax">
                                        (Bedingung) <i>?</i> Ausdruck1 : Ausdruck2
                                    </p>
                                    <figcaption>Syntax Beispiel 2.4: Ternärer Operator</figcaption>
                                </figure>
                                <p>
                                    Ausdruck 1 wird ausgeführt falls die Bedingung true ergibt und Ausdruck 2 falls sie false liefert. Dieser Operator existiert genauso in anderen Programmiersprachen wie Ruby und Java. Im Sinne der Lesbarkeit des Codes, sollte man den ternären Operator
                                    für komplexer und längere Ausdrücke vermeiden, da der Code so schnell unübersichtlich werden kann.<br>
                                    <br><b>Switch-Case-Anweisung</b><br><br> Die switch-case-Anweisung ist eine Alternative zu der if-Anweisung und ist vor allem bei einer Unterscheidung zwischen mehreren Fällen nützlich. Die Syntax der switch-case-Anweisung
                                    sieht wie folgt aus: </p>
                                <figure id="syntax2-5">
                                    <p class="syntax">
                                        <i>switch</i>(Ausdruck) { <br> <i>case</i> Wert1: Anweisungen <i>break</i>; <br> <i>case</i> Wert2: Anweisungen <i>break</i>; <br> <i>case</i> Wert3: Anweisungen <i>break</i>; <br> … <br> <i>default</i>: Anweisungen
                                        }
                                    </p>
                                    <figcaption>Syntax Beispiel 2.5: Switch-Case</figcaption>
                                </figure>
                                <p>
                                    Der nach dem switch Schlüsselwort einzufügende Ausdruck, ist der, der mit den verschiedenen Werten der einzelnen cases (engl. „Fälle“) verglichen wird. Die Fälle werden mit dem Schlüsselwort case eingeleitet und bestehen aus einem Testwert, der dann mit
                                    der obigen Anweisung verglichen wird. Stimmen diese überein, wird der Anweisungsblock des case ausgeführt. Die einzelnen Vergleiche finden über den === Operator statt. Es werden also nicht nur der Wert, sondern auch
                                    die Typgleichheit überprüft. Gibt es kein case, welches mit dem Ausdruck übereinstimmt, wird der optionale default case ausgeführt. Geschweifte Klammern nach den einzelnen case-Anweisungen sind nicht zwingend erforderlich.
                                    Möchte man aber einen Block Scope innerhalb des case, um so let Variablen auf das eine case einzuschränken, kann man die geschweiften Klammern nach dem Doppelpunkt setzen. Die break-Anweisung ist ebenfalls optional.
                                    Durch break wird nach dem Aufruf des case die switch-Anweisung beendet und die nachfolgenden cases ignoriert, auch wenn diese ebenfalls mit dem Ausdruck übereinstimmen. Lässt man es weg, werden alle nachfolgenden cases
                                    ausgeführt, egal ob der Wert mit dem Ausdruck übereinstimmt oder nicht. Dies geschieht solange bis das Programm auf eine break-Anweisung stößt oder die switch-Anweisung beendet ist. Aufgrund dieses Verhaltens handelt
                                    es sich „[…] um eine <b>Fall-Through-Anweisung</b>“ [Ste14, S. 80].
                                </p>
                            </div>
                            <h4 class="hider"><i class="pfeil-d"></i>2.2.2 Schleifen</h4>
                            <div>
                                <p>
                                    <b>While und do-while-Schleifen</b><br>Im Schleifenkopf der while-Schleife befindet sich eine Bedingung, die vor dem ersten Durchlauf und auch vor allen weiteren Durchläufen überprüft wird. Nur wenn die Bedingung den
                                    booleschen Wert true liefert wird die Schleife durchlaufen, also läuft die Schleife solange, bis die Bedingung false ergibt. Der Unterschied zwischen der while-Schleife und der do-while-Schleife ist, dass bei der do-while-Schleife
                                    die Überprüfung der Bedingung erst nach dem ersten Durchlauf stattfindet. Daher ist es garantiert, dass die Schleife mindestens einmal durchlaufen wird, während es bei der while-Schleife zu gar keinem Durchlauf kommen
                                    kann. Deswegen wird die do-while-Schleife auch <b>fußgesteuert</b> und die while-Schleife <b>kopfgesteuert</b> genannt. Die Syntax der do-while-Schleife unterscheidet sich von der while-Schleife wie folgt:
                                </p>
                                <figure id="syntax2-6">
                                    <p class="syntax">
                                        <i>while</i>(Bedingung) { Anweisungen } <br> <i>do</i> { Anweisungen } <i>while</i>(Bedingung);
                                    </p>
                                    <figcaption>Syntax Beispiel 2.6: while- und do-while-Schleife</figcaption>
                                </figure>
                                <p>
                                    <br><b>for, for-in und for-of-Schleifen</b><br><br>Die for-Schleife ist eine weitere kopfgesteuerte Schleife, bei der die Anzahl der Durchläufe im Schleifenkopf definiert ist. Daher ist es sinnvoll diese Schleife zu
                                    benutzen, falls die Anzahl der Durchläufe, die abgearbeitet werden sollen, bekannt ist. Der Initialisierungsausdruck wird genau einmal bei Beginn der Schleife ausgeführt. Er ist dafür da eine Zählervariable oder ähnliches
                                    zu deklarieren und zu initialisieren. Für solche Zählervariablen ist es sinnvoll let zu verwenden und sie so Block lokal zu halten. Der Bedingungsausdruck wird auch hier mit einer Typumwandlung zu einem booleschen Wert
                                    konvertiert und führt sobald dieser false liefert zu einem Schleifenabbruch. Der dritte Ausdruck wird nach jedem Schleifendurchlauf ausgeführt. Mit ihm kann man die vorher deklarierte Zählervariable manipulieren, oder
                                    die Bedingung beeinflussen, um so die Schleife nach der gewünschten Anzahl an Durchläufen zu beenden.<br><br> Die for-in-Schleife erfüllt einen bestimmten Zweck in JavaScript. Sie ist dafür gedacht über die Eigenschaften
                                    von Objekten zu iterieren. Es wird über die Namen der Eigenschaften iteriert und nicht über die Werte. Die Iteration geschieht in zufälliger Reihenfolge, daher ist es nicht sinnvoll die for-in-Schleife zum Iterieren
                                    über Arrays, bei denen die Reihenfolge der Daten wichtig ist, oder ähnliche Objekte zu benutzen. Für Arrays die String-Schlüssel anstatt Indizes benutzen, ist die for-in-Schleife jedoch nützlich. Die Variable nimmt
                                    in jedem Schleifendurchlauf den Namen einer Eigenschaft des Objektes an. So kann im Anweisungsblock über die Variable auf die Werte der Eigenschaft zugegriffen werden.<br><br>Die for-of-Schleife ist der for-in-Schleife
                                    sehr ähnlich. Allerdings ist die for-of-Schleife für spezielle Objekte, wie Arrays oder Maps gedacht. Hier wird über die Werte, anstatt über die Namen der Eigenschaften iteriert. Der Variable wird in jedem Schleifendurchlauf
                                    ein Wert des Objektes zugewiesen. Auf den Wert kann dann im Anweisungsblock zugegriffen werden. In der folgenden Abbildung wird der Unterschied zwischen der for-in- und for-of-Schleife anhand eines Beispiels verdeutlicht:
                                </p>
                                <figure id="abb2-4">
                                    <img src="v02cmb-data/forIn_forOf.png" alt="Abbildung For-Schleifen" width="50%" border="1px solid" />
                                    <figcaption>Abbildung 2.4: Vergleich zwischen der for-in- und for-of-Schleife anhand eines Beispiels</figcaption>
                                </figure>
                                <p>
                                    In diesem Beispiel wird über das vorher definierte Array einmal mit der for-in- und for-of-Schleife iteriert. Jeder Durchlauf der Schleife gibt den aktuellen Wert der innerhalb des Schleifenkopfes deklarierten Variable aus. Dabei gibt die for-in-Schleife
                                    die Namen der Eigenschaften aus, hier die Indizes des Arrays, während die for-of-Schleife die eigentlichen Werte der Eigenschaften des Arrays ausgibt.<br><br>
                                </p>
                                <figure id="syntax2-7">
                                    <p class="syntax">
                                        <i>for</i>(Initialisierung; Bedingung; Ausdruck) { Anweisungen } <br> <i>for</i>(Variable <i>in</i> Objekt) { Anweisungen } <br> <i>for</i>(Variable <i>of</i> iterierbaresObjekt) { Anweisungen }
                                    </p>
                                    <figcaption>Syntax Beispiel 2.7: for-Schleifen</figcaption>
                                </figure>
                            </div>
                        </div>
                        <h4 class="hider"><i class="pfeil-d"></i>2.3 Funktionen</h4>
                        <div>
                            <p>
                                Funktionen in JavaScript sind Objekte. Sie können Variablen zugewiesen und auch anderen Funktionen übergeben werden. Sie können mit dem Schlüsselwort function oder einem Konstruktor erzeugt werden:
                            </p>
                            <figure id="syntax2-8">
                                <p class="syntax">
                                    <i>function</i> f( formelle Parameter ) { Anweisungen } <br> <i>var</i> f = <i>new</i> Function( formelle Parameter ) { Anweisungen };
                                </p>
                                <figcaption>Syntax Beispiel 2.8: Deklaration einer Funktion</figcaption>
                            </figure>
                            <p>
                                Die formalen Parameter einer Funktion befinden sich im lokalen Scope und können daher nur innerhalb der Funktion referenziert werden. Wie im Unterkapitel ‚Hoisting‘ schon erwähnt werden Funktionsdeklarationen ebenfalls gehoisted. Dies gilt nicht für anonyme
                                Funktionen. Anonyme Funktionen werden erstellt in dem man die Funktion ohne Namen deklariert. Funktionen können über ihren Namen oder über die Variable, in der sie gespeichert sind, aufgerufen werden. Außerdem hat jede
                                Funktion eine apply-Methode, die ebenfalls dazu gedacht ist, die Funktion aufzurufen. Es ist auch möglich Funktionen innerhalb des Anweisungsblocks einer Funktion zu deklarieren und so, mehrere Funktionen ineinander zu
                                verschachteln. Sind Funktionen ineinander verschachtelt, kann die innere Funktion auf den Scope der äußeren zugreifen, aber nicht umgekehrt. Funktionen mit einer Variablen Anzahl an Parametern können über das arguments-Objekt
                                jeder Funktion realisiert werden. Innerhalb dieses Objektes werden die übergebenen Parameter gespeichert, auch wenn mehr Werte übergeben werden, als in der Deklaration spezifiziert wurden. Über dieses Objekt kann dann innerhalb
                                der Funktion iteriert werden (vgl. [Moz19c]). Alternativ kann die Funktion wie in Java mit einem Rest-Parameter deklariert werden. Dieser Parameter sieht wie folgt aus:
                            </p>
                            <figure id="syntax2-9">
                                <p class="syntax">
                                    <i>function</i> f(a, b, …restParameter) { Anweisungen }
                                </p>
                                <figcaption>Syntax Beispiel 2.9: Funktion mir Rest-Parameter</figcaption>
                            </figure>
                            <p>Der Rest-Parameter, gekennzeichnet durch drei Punkte, sammelt alle übergebenen Parameter, die keinem der vorherigen formellen Parameter zugewiesen werden konnten. </p>
                        </div>
                        <h4 class="hider"><i class="pfeil-d"></i>2.4 Objekte</h4>
                        <div>
                            <p>
                                Wie im obigen Abschnitt über Arrays schon erwähnt bilden assoziative Arrays die Basis für Objekte. Daher ist es auch möglich Objekte als Literal wie ein assoziatives Array zu erzeugen. Weiterhin kann man Objekte auch mit Hilfe einer Konstruktor Funktion
                                nach folgendem Schema erzeugen:
                            </p>
                            <figure id="syntax2-10">
                                <p class="syntax">
                                    <i>function</i> Objektname(Formale Parameter) { <br> Eigenschaften und Methoden deklarieren <br> }<br> <i>var</i> objekt = <i>new</i> Objektname(Aktuelle Parameter);

                                </p>
                                <figcaption>Syntax Beispiel 2.10: Erstellung eines Objektes über eine Konstruktor-Funktion</figcaption>
                            </figure>
                            <p>
                                Der Konstruktor wird über das Schlüsselwort new aufgerufen und innerhalb der Klammern werden die erforderlichen Parameter übergeben. Auf die Eigenschaften und Methoden des Objektes kann man wie in Java über Objektname.Attribut zugreifen. So kann man einem
                                Objekt auch eine neue Eigenschaft oder eine Methode hinzufügen. In JavaScript gibt es keine Möglichkeiten den Zugriff auf Attribute mit Schlüsselwörtern wie private oder protected zu begrenzen. Anstatt dessen kann man die
                                Attribute eines Objektes in einem innerhalb des Konstruktors erzeugten Objekt „verstecken“. Darauf zugreifen kann man dann über ein weiteres in dem Konstruktor erzeugtes Objekt, welches setter- und getter-Methoden zu Verfügung
                                stellt. Das zweite Objekt mit dem auf die „privaten“ Attribute zugegriffen wird, ist das Objekt, welches am Ende des Konstruktors zurückgegeben wird. So kann man über dieses Objekt auf die „privaten“ Attribute getter- und
                                setter-Methoden zugreifen.<br><br>In Java wird Vererbung durch das Schlüsselwort extends und der Methode super() realisiert. Mit extends wird eine Unterklasse definiert, die eine Oberklasse
                                ‚erweitert‘. Innerhalb des Konstruktors kann man mit der super()-Methode den Konstruktor der Oberklasse aufrufen und diesem Parameter zur Initialisierung von Attributen übergeben. Da es in JavaScript keine „richtigen“ Klassen
                                gibt, wird die Vererbung, über die im ersten Kapitel erwähnten Prototypen realisiert. Es ist auch möglich Konstruktor-Funktion mit der call()-Methode zu verketten und so das Verhalten der super()-Methode in Java nachzubilden.
                                Die call()-Methode wird mit einer Referenz auf das aufrufende Objekt via this und den verschiedenen zu übergebenden Parametern aufgerufen. Die folgende Abbildung veranschaulicht die Vererbung und den Zugriffsschutz anhand
                                eines Beispiels:
                            </p>
                            <figure id="abb2-5">
                                <img src="v02cmb-data/vererbung_und_kapselung.png" alt="Abbildung Kaspelung und Vererbung" width="70%" border="1px solid" />
                                <figcaption>Abbildung 2.5: Beispiel Zugriffsschutz und Vererbung</figcaption>
                            </figure>
                            <p>
                                In diesem Beispiel sind zwei Konstruktoren deklariert. Der lkw-Konstruktor übergibt die Parameter name und preis an den fahrzeug-Konstruktor mittels der call()-Methode. Somit entsteht eine Vererbungshierarchie. In beiden Konstruktoren werden die Attribute
                                mit Hilfe eines privat-Objektes „versteckt“ und nur über die getter-Methoden verfügbar gemacht. Anhand der Konsolenausgabe kann man erkennen, dass das erstellte lkw-Objekt die getName- und getPreis-Methoden geerbt hat und
                                die direkten Zugriffe auf Attribute undefined ausgeben, während die getter-Methoden das gewünschte Ergebnis liefern.
                            </p>
                        </div>
                        <h4 class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                        <p>
                            In diesem Kapitel wurde ein Überblick über die verschiedenen in JavaScript vorhandenen Datentypen und sprachlichen Grundelemente gegeben. Außerdem wurde die Typisierung von JavaScript und Besonderheiten wie Hoisting erläutert. Des Weiteren wurde genauer
                            auf die verschiedenen objektorientierten Eigenschaften von JavaScript wie Vererbung und Zugriffsschutz eingegangen.
                        </p>
                        <h4 class="hider"><i class="pfeil-d"></i>Aufgaben</h4>
                        <div>
                            <p class="uebung">
                                Aufgabe 2.1<br> Was ist das Besondere an dem JavaScript Datentyp Number?
                            </p>
                            <p class="uebung">
                                Aufgabe 2.2<br> Was ist der Unterschied zwischen dem == und dem === Operator?
                            </p>
                            <p class="uebung">
                                Aufgabe 2.3<br> Wie unterscheiden sich Java Arrays von den JavaScript Arrays?
                            </p>
                            <p class="uebung">
                                Aufgabe 2.4<br> Warum ist es oft nicht sinnvoll mit einer for-in-Schleife über Arrays zu iterieren?
                            </p>
                            <p class="uebung">
                                Aufgabe 2.5<br> Wie ist Vererbung in JavaScript realisiert?
                            </p>
                            <p class="uebung">
                                Aufgabe 2.6<br> Wie lassen sich Attribute vor dem Zugriff von außen schützen?
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h3 class="hider" id="events"><i class="pfeil-d"> </i>3 Event-Handling</h3>
                        <div>
                            <div class="einfuehrung clearfix">
                                <p>
                                    In diesem Kapitel wird das Event-Handling in Java erläutert. Es wird vor allem auf den Ablauf und die Verarbeitung eines Events durch EventHandler eingegangen. Weiterhin wird ein kurzer Überblick über das Ajax Konzept gegeben und dessen funktionsweise
                                    dargestellt.
                                    <br><br> Nachdem dieses Kapitel durchgearbeitet wurde sollten Sie in der Lage sein,
                                </p>
                                <ul>
                                    <li>EventHandler an HTML-Elemente anzubringen,</li>
                                    <li>die Phasen des Event-Ablaufs zu nennen,</li>
                                    <li>das Prinzip des Bubbling und des Capturing erläutern zu können,</li>
                                    <li>die Funktionsweise des Ajax Konzepts verstanden haben sowie</li>
                                    <li>die Vor- und Nachteile von Ajax wiedergeben zu können.</li>
                                </ul>
                            </div>
                            <p>
                                In JavaScript existieren verschiedene Events (engl. Ereignisse), die durch unterschiedliche Geschehnisse ausgelöst werden können. Ein Beispiel für eines dieser Events wäre das click-Event, das durch den Anwender bei einem Mausklick auf ein HTML-Element
                                ausgelöst wird. Diese Events können mit einem sogenannten Event-Handler abgefangen und verarbeitet werden. Event-Handler können direkt im HTML-Dokument mit Attributen wie onload oder onclick eingefügt werden, oder in einem
                                Script über die addEventListener-Methode. Die zweite Variante, bei der ein externes Skript den Elementen automatisch die Event-Handler zuweist, ist stets zu bevorzugen, da so HTML und JavaScript getrennt bleibt [Ste14,
                                S. 266]. Jedes HTML-Element kann mehrere Event-Handler besitzen.
                            </p>
                            <div class="center-paragraph">
                                <h4 class="hider"><i class="pfeil-d"></i>3.1 Verarbeitung eines Events</h4>
                                <div>
                                    <p>
                                        <br>Beim Auslösen eines Events auf einem Element wird standardmäßig nicht nur der EventHandler dieses Elements ausgelöst, sondern auch die entsprechenden EventHandler der Eltern-Elemente. Dies liegt daran, dass
                                        das Event-Handling drei verschiedene Phasen durchläuft. Die erste Phase ist die Event-Capturing-Phase. Hier „wandert“ das Event durch die Eltern-Kind-Elementstruktur im DOM-Baum. Es startet im obersten Element und
                                        wandert dann bis hin zum tiefsten Kind-Element, welches das ursprüngliche Event ausgelöst hat. Dieses Element wird das target-Element genannt. Beim Hinzufügen von Event-Handlern durch die addEventListener-Methode,
                                        kann optional ein boolescher Wert übergeben werden, der das Verhalten während der Event-Capturing-Phase bestimmt. Standardmäßig wird hier ein false angenommen, was dazu führt das während der Event-Capturing-Phase
                                        nichts Besonderes passiert. Setzt man den Wert jedoch auf true, wird der Event-Handler in der Capturing Phase registriert und reagiert auf Events die auf einem Element tiefer im DOM-baum ausgelöst wurden frühzeitig.
                                        Ist das Event am target-Element angekommen, beginnt die zweite, sogenannte „Target-Phase“. Hier wird der Event-Handler des target-Elements ausgeführt. Anschließend beginnt die dritte Phase, welche die Event-Bubbling-Phase
                                        ist. Diese Phase ist das Gegenteil der Event-Capturing-Phase. Das Event „wandert“ den DOM-baum wieder nach oben, bis zum obersten Element. Hier liegt hier der Ursprung des am Anfang des Unterkapitels erwähnten Verhaltens.
                                        Alle Event-Handler, die nicht in der Capturing-Phase registriert wurden, werden jetzt ausgehend vom target-Element, bis hin zum obersten Element ausgelöst. Dieses Verhalten wird durch das folgende Beispiel veranschaulicht:
                                    </p>
                                    <figure id="abb3-1">
                                        <img src="v02cmb-data/Bubbling_Capturing.png" alt="Abbildung Bubbling und Capturing" width="70%" border="1px solid" />
                                        <figcaption>Abbildung 3.1: Vergleich Bubbling und Capturing</figcaption>
                                    </figure>
                                    <p>
                                        In diesem Beispiel wurden die jeweiligen geschachtelten &lt;div&gt;-Elemente mit einem Click-Event-Handler versehen. Die grün-umrahmten &lt;div&gt;-Elemente haben einen Event-Handler der „blubbert“ und die roten einen der „captured“. Gelb markiert ist
                                        der boolesche Wert in der zweiten for-of-Schleife, der das Capturing aktiviert. Anhand der Konsolen-Ausgabe kann man erkennen wie sich die Reihenfolge der Verarbeitung des Events bei einem Klick auf die jeweiligen
                                        „Ebene 3“ target-Elemente unterscheidet. Bei einem Klick auf „Bubbling Ebene 3“ wird zuerst dessen Event-Handler und dann die der übergeordneten Elemente ausgelöst. Der Klick auf „Capturing Ebene 3“ löst erst die
                                        Event-Handler der übergeordneten Elemente und dann den des target-Elements aus.
                                    </p>
                                </div>
                                <h4 class="hider"><i class="pfeil-d"></i>3.2 Asynchrone Verarbeitung (Ajax)</h4>
                                <div>
                                    <p>
                                        Ajax ist ein Akronym und steht für „Asynchronous JavaScript and XML“. Es ermöglicht das nebenläufige Senden von HTTP-Requests an den Server, sodass die aktuelle HTML-Seite nicht verlassen werden muss und so passive Wartezeit für den Benutzer vermieden
                                        werden kann. Ein Beispiel für eine Verwendung von Ajax ist die Überprüfung der Verfügbarkeit eines Benutzernamens bei der Registration auf verschiedenen Webseiten. Während der Benutzername eingegeben wird, kontrolliert
                                        ein Skript auf dem Server ob der Name bereits vergeben ist und sendet das Ergebnis zurück an die Anwendung, welche das Ergebnis dann über die Manipulation des DOM-Baumes anzeigt. Für den Austausch der Daten wird
                                        ein Kommunikationsobjekt benötigt. In den heutigen Browsern ist die XMLHttpRequest Schnittstelle dafür verantwortlich. Um diese zu benutzen muss ein Objekt davon mit einem Konstruktor erzeugt werden. Dieses Objekt
                                        stellt die für die asynchrone Kommunikation benötigten Methoden und Attribute zu Verfügung. Mit den Methoden open() und send() kann dann ein HTTP-Request gestellt werden. Mit der Methode open() wird angegeben welche
                                        URL geöffnet und welche HTTP-Methode verwendet werden soll. Außerdem kann man optional angeben, ob die Anfrage asynchron geschehen soll und einen Benutzernamen und Passwort für eine HTTP-Authentifizierung hinterlegen
                                        (vgl. [Jäg08, S. 189]). Die send()-Methode übermittelt, die zuvor spezifiziert Anfrage. Verwendet man die HTTP-POST-Methode müssen die zu versendenden Daten der send()-Methode als Parameter übergeben werden. Der
                                        HTTP-Request wird vom Server verarbeitet und das Ergebnis per HTTP-Response zurückgeschickt.<br><br> Um auf Zustandswechsel des Request-Ablaufs zu reagieren wird eine Call-Back-Funktion
                                        benötigt. Das XMLHttpRequest-Objekt hat ein Attribut namens onreadystatechange welches einen Event-Handler beschreibt, der immer dann aufgerufen wird, wenn das readyState-Attribut sich verändert. Dieses Attribut
                                        kann 5 verschiedene Werte annehmen:
                                    </p><br>
                                    <table id=tabelle1>
                                        <thead>
                                            <tr>
                                                <th>Wert</th>
                                                <th>Bedeutung</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0</td>
                                                <td>Die open-Methode wurde nicht aufgerufen</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Die open-Methode wurde aufgerufen, send-Methode noch nicht</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Die send-Methode wurde aufgerufen</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Daten wurden teilweise empfangen</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Daten wurden vollständig empfangen</td>
                                            </tr>
                                        </tbody>
                                        <caption>Tabelle 3.1: Werte des readyState-Attributs [Jäg08, S.190]</caption>
                                    </table><br>
                                    <p>
                                        Da Funktionen in JavaScript Objekte sind, kann man die Call-Back-Funktion, oder eine anonyme Funktion dem onreadystatechange-Attribut zuweisen und somit auf die Änderungen des Zustands reagieren. In der Call-Back-Funktion sollte überprüft werden ob das
                                        readyState-Attribut den Wert 4 erreicht hat und somit alle Daten vorhanden sind. Ebenfalls sollte überprüft werden, dass der HTTP-Request ohne Fehler abgelaufen ist. Dazu kann das status-Attribut des XMLHttpRequest-Objektes
                                        auf die gängigen HTTP-Response Statuscodes geprüft werden. Der Antworttext des HTTP-Request wird im responseText-Attribut gespeichert und kann darüber ausgegeben, oder anderweitig verwendet werden.<br><br>Neben
                                        den Vorteilen von Ajax für den Benutzer, wie der Vermeidung von Wartezeiten und ständigem neu laden der Website, gibt es jedoch auch einige Nachteile. Beispielsweise gibt es Probleme mit der Browsernavigation, da
                                        sich die einzelnen Zustände nicht als Lesezeichen speichern lassen und die Vorwärts- und Rückwärts-Buttons nicht richtig funktionieren, bzw. sich nur über komplizierte Umwege realisieren lassen.
                                    </p>
                                </div>
                                <h4 class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                                <p>
                                    Dieses Kapitel erläuterte verschiedenen Arten Event-Handler an HTML-Elemente anzubringen und wie diese Events bearbeiten. Weiterhin wurden die einzelnen Phasen des Event-Ablaufs erläutert und deren Auswirkungen betrachtet. Außerdem wurde ein kurzer Überblick
                                    über Ajax verschafft und dessen Funktionsweise erläutert.
                                </p>
                                <h4 class="hider"><i class="pfeil-d"></i>Aufgaben</h4>
                                <div>
                                    <p class="uebung">
                                        Aufgabe 3.1<br> Warum sollte man Event-Handler nicht direkt im HTML-Dokument an die Elemente anbringen?
                                    </p>
                                    <p class="uebung">
                                        Aufgabe 3.2<br> Nennen Sie die drei Phasen des Event-Ablaufs.
                                    </p>
                                    <p class="uebung">
                                        Aufgabe 3.3<br> Erklären Sie den Unterschied zwischen „Bubbling“ und „Capturing“.
                                    </p>
                                    <p class="uebung">
                                        Aufgabe 3.4<br> Was versteht man unter Ajax und welche Vor- und Nachteile hat dieses Konzept?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h3 class="hider" id="dom"><i class="pfeil-d"></i>4 Zugriff auf den DOM-Baum</h3>
                        <div>
                            <div class="einfuehrung clearfix">
                                <p>Dieses Kapitel beschäftig sich mit dem Zugriff und der Manipulation von HTML-Elementen über den DOM-Baum. Dabei wird auf die Struktur des DOM-Baumes eingegangen und einzelne Methoden für die Manipulation des Baumes erläutert.
                                    <br><br>Nach durcharbeiten dieses Kapitels sollten Sie in der Lage sein,
                                </p>
                                <ul>
                                    <li>die Struktur des DOM-Baumes darzustellen,</li>
                                    <li>die verschiedenen Arten des Zugriffs auf HTML-Elemente und deren Attribute zu erklären sowie</li>
                                    <li>verschiedene Methoden zum Erstellen und Entfernen von HTML-Elementen nennen zu können.</li>
                                </ul>
                            </div>
                            <p>
                                <br> Während dem Laden einer Website erstellt der Browser ein Modell der Website in Baumstruktur. Deshalb ist es sinnvoll ein Skript, das den DOM-Baum manipuliert erst am Ende des HTML-Bodys einzufügen, da man so sichergehen
                                kann das der DOM-Baum schon vollständig geladen ist. Alternativ kann man den Teil des Skripts der den DOM-Baum manipuliert in einem DOMContentLoaded-EventHandler verpacken. „Das DOMContentLoaded-Event wird ausgelöst, wenn
                                das initiale HTML-Dokument vollständig geladen und geparst ist. Es wird dabei nicht auf Stylesheets, Bilder und Frames gewartet“ [Moz19b]. Der DOM-Baum ist eine einheitliche Schnittstelle die Plattform und Programmiersprachen
                                unabhängig ist. Die Baumstruktur stellt das HTML-Dokument und all seine Elemente dar. Jedes HTML-Element wird als Element-Node (engl. Element-Knoten) innerhalb des Baumes dargestellt. Neben den Element-Nodes gibt es noch
                                Attribut-Nodes und Text-Nodes, welche die zu den Element-Nodes zugehörigen Attribute und Texte darstellen. Die drei soeben genannten Node-Typen und die Document-Node stellen die vier wichtigsten Node-Typen dar. Ein weiterer
                                Node-Typ ist zum Beispiel ein Kommentar. Die Document-Node repräsentiert die komplette HTML-Seite und über diese Node werden alle weiteren Nodes adressiert. Es ist sozusagen der Startpunkt bei jedem Zugriff auf weitere
                                Element-Nodes. Jede Node des Baumes wird als Objekt repräsentiert. Jedes Node-Objekt hat verschiedene Methoden und auch Attribute die Informationen über sich selbst, sowie die Beziehungen zu den benachbarten Knoten beinhalten.
                                Die Attribute und Texte sind jeweils eine „child-Node“, also ein Unterknoten der Element-Node. Den DOM-Baum und seine Nodes kann man mit Hilfe von JavaScript dynamisch manipulieren. Man kann Elemente hinzufügen, entfernen
                                oder verändern. Dafür werden verschiedene Methoden bereitgestellt. <br><br> Es gibt verschiedene Wege eine Element-Node zu referenzieren. Ein einzelnes Element kann man über dessen ID oder das name-Attribut ansprechen.
                                Allerdings sollte die Referenzierung über das name-Attribut vermieden werden, da das name-Attribut im Gegensatz zu der ID nicht eindeutig ist und auch je nach HTML-Tag verschiedene Bedeutungen haben kann. Mehrere Elemente
                                können über eine gemeinsame Klasse oder dem HTML-Tag referenziert werden. Bei den Referenzierungen über die Klasse, den Tag und dem name-Attribut wird ein NodeList-Objekt zurückgegeben, welches eine Sammlung an einzelnen
                                Nodes repräsentiert, während über die ID eine Referenz auf das einzelne Node-Objekt zurückgegeben wird. Da wie oben beschrieben all diese Methodenaufrufe über das Document-Objekt getätigt werden, sehen sie sehr ähnlich
                                aus:
                            </p>
                            <figure id="syntax4-1">
                                <p class="syntax">
                                    <i>var</i> element = document.getElementById(“ID”);<br> <i>var</i> elements = document.getElementsByName(“name”); <br> <i>var</i> elements = document.getElementsByClassName(“Class”); <br> <i>var</i> elements = document.getElementsByTagName(“Tag-Name”);
                                </p>
                                <figcaption>Syntax Beispiel 4.1: Selektion von HTML-Elementen mittels DOM-Methoden</figcaption>
                            </figure>
                            <p>
                                Die referenzierten Element-Objekte kann man dann wiederum über verschiedene Methoden oder deren Attribute modifizieren. Die Attribute der Element-Objekte haben getter und setter, können aber auch direkt wie bei anderen JavaScript Objekten angesprochen
                                werden. Die Namen der Attribute entsprechen den HTML-namen. Nur das class-Attribut heißt className. Der Text einer Element-Node steht in dem Attribut nodeValue. Das folgende Beispiel demonstriert einen Zugriff auf ein HTML-Element
                                und die Manipulation der Attribute des Elementes.
                            </p>
                            <figure id="abb4-1">
                                <img src="v02cmb-data/Dom_Manipulationpng.png" alt="Abbildung DOM Manipulation" width="70%" border="1px solid" />
                                <figcaption>Abbildung 4.1: Beispiel DOM-Baum Manipulation</figcaption>
                            </figure>
                            <p>
                                Im obigen Beispiel wird ein &lt;h1&gt;-HTML-Heading-Element über dessen tag-Name einer Variablen zugwiesen. Da die getElementsBytagName-Methode eine Collection zurückgibt, muss das einzelne Node-Objekt mit einem Index selektiert werden. Anschließend wird
                                das style-Attribut des Elements modifiziert, um so die Farbe der Überschrift zu ändern. Wichtig hierbei ist, dass es sich um das inline style-Attribut handelt und nicht das Stylesheet. Außerdem wird über das innerHTML Attribut
                                der Text der Überschrift geändert. Für die Änderung des Textes gibt es mehrere Möglichkeiten. Da der Text in einer child-Node des Elementes steht, hätte man auch über das nodeValue-Attribut der child-Node den Text ändern
                                können. Der Unterschied zwischen den beiden Methoden ist, dass innerHTML im Gegensatz zu nodeValue den Text als HTML parst.<br><br>Über das document-Objekt können auch neue Elemente dem Baum
                                hinzugefügt oder entfernt werden. Für das Entfernen eines Elementes existiert die removeChild(element)-Methode. Mit dieser Methode kann man eine child-Node über dessen parentNode entfernen. Zum Erstellen von Elementen gibt
                                es die createElement(element)-Methode. Das erstellte Element muss anschließend noch mit der appendChild(element)-Methode einer anderen Node hinzugefügt werden.
                            </p>
                            <h4 class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                            <p>
                                In diesem Kapitel ging es hauptsächlich um die Struktur des DOM-Baumes und der einzelnen node-Objekte. Ebenso wurden verschiedene Möglichkeiten für den Zugriff auf und die Manipulation von HTML-Elementen innerhalb des DOM-Baumes vorgestellt.
                            </p>
                            <h4 class="hider"><i class="pfeil-d"></i>Aufgaben</h4>
                            <div>
                                <p class="uebung">
                                    Aufgabe 4.1<br> Was sind die vier wichtigsten node-Typen des DOM-Baumes?
                                </p>
                                <p class="uebung">
                                    Aufgabe 4.2<br> Warum sollte man für den Zugriff auf ein einzelnes HTML-Element den Weg über dessen ID, anstatt dem Weg über das name-Attribut bevorzugen?
                                </p>
                                <p class="uebung">
                                    Aufgabe 4.3<br> Was ist der Unterschied zwischen einer Änderung des Textes eines HTML-Elements über das innerHTML-Attribut und des nodeValue-Attributs des Text-Kind-Knotens?
                                </p>
                            </div>
                        </div>

                        <div class="center-paragraph">
                            <h3 class="hider" id="debug"><i class="pfeil-d"></i>5 Debugging über Browsertools</h3>
                            <div>
                                <div class="einfuehrung clearfix">
                                    <p>In den verschiedenen verfügbaren Browsern gibt es unterschiedliche Tools, um JavaScript und andere webbasierte Sprachen zu debuggen. Dieses Kapitel beschäftigt sich mit der Konsole und anderen Debugging-Tools des Firefox-Browsers.
                                        <br><br>Nach durcharbeiten dieses Kapitels sollten Sie in der Lage sein Ihren Code mit folgenden Methoden zu debuggen:
                                    </p>
                                    <ul>
                                        <li>Ausgaben auf der Konsole tätigen und damit Objekte analysieren,</li>
                                        <li>mit dem Debugger Breakpoints setzen und schrittweise den Programmablauf nachzuverfolgen sowie</li>
                                        <li>die verschiedenen Scopes und die dazugehörigen Variablen anzuzeigen.</li>
                                    </ul>
                                </div>
                                <p>
                                    <br>Die meisten Firefox Entwicklertools können über das „Hamburger-Menü“ und dessen Web-Entwickler Tab, oder die F12 Taste aufgerufen werden, wobei es im Hamburgermenü zusätzliche Tools für Webentwickler gibt, die über
                                    die F12 Taste nicht erreichbar sind. Zwei der wichtigsten Tools für das Debuggen von JavaScript sind die Konsole und der Debugger. Über die Konsole werden Fehlermeldungen oder andere im Quellcode spezifizierte Ausgaben
                                    angezeigt. Eine Methode für die Konsolenausgabe, die auch in mehreren der Code-Beispiele in vorherigen Kapiteln verwendet wurde, ist die console.log()-Methode. Gibt man Objekte mit dieser Methode aus, kann man in der
                                    Konsole die Struktur des Objektes genauer untersuchen, da neben den Attributen auch der dazugehörige Prototyp angezeigt wird. Folgende Abbildung zeigt den Aufbau und die Funktion der Konsole anhand eines Beispiels:
                                </p>
                                <figure id="abb5-1">
                                    <img src="v02cmb-data/Konsole.png" alt="Abbildung Konsole" width="50%" border="1px solid" />
                                    <figcaption>Abbildung 5.1: Ausgabe eines Objektes auf der Konsole</figcaption>
                                </figure>
                                <p>
                                    Das in diesem Beispiel mit einem Konstruktor erzeugte fahrzeug-Objekt wird auf der Konsole ausgegeben. Die erzeugte Ausgabe ist im rot markierten Abschnitt (1) der Abbildung zu erkennen. Das Objekt mit seinen Attributen und dessen Prototyp wird ausgegeben.
                                    Die Details der fahren()-Funktion und des Prototypen kann bei Bedarf durch ausklappen des entsprechenden Reiters ebenfalls eingesehen werden. In Abschnitt (2) der Abbildung kann man einige Optionen zur Filterung der
                                    Konsolenausgabe sehen. So kann man sich bei Bedarf nur Fehler, Warnungen oder andere Ausgaben anzeigen lassen.<br><br>Der Debugger funktioniert ähnlich wie in anderen Programmiersprachen.
                                    Er verschafft einen guten Überblick über den Aufbau des Scripts und unterstützt so bei der Fehlersuche. Weiterhin ist es möglich „Breakpoints“ im Quellcode zu setzen und so nach erneutem ausführen des Skripts die Ausführung
                                    des Codes an der gewählten Stelle unterbrechen. Dann kann man schrittweise die Ausführung fortsetzen und das Verhalten beobachten. Währenddessen erlaubt der Debugger eine Einsicht in die aktuelle Wertebelegung der Variablen
                                    innerhalb der vorhandenen Scopes. Anhand der folgenden Abbildung wird der Debugger näher erläutert:
                                </p>
                                <figure id="abb5-2">
                                    <img src="v02cmb-data/debugger.png" alt="Abbildung Debugger" width="90%" border="1px solid" />
                                    <figcaption>Abbildung 5.2: Funktion und Struktur des Firefox Debuggers</figcaption>
                                </figure>
                                <p>
                                    In Abschnitt (1) der Abbildung kann zwischen dem Struktur-Tab, in dem man zu der Position der verschiedenen Funktionen innerhalb des Quellcodes springen kann, und dem Quellen-Tab gewechselt werden. Im Quellen-Tab kann zwischen verschiedenen Dateien, die
                                    im Debugger behandelt werden sollen, gewechselt werden. Innerhalb von Abschnitt (2) wird der eigentliche Quellcode angezeigt. Hier ist es möglich Breakpoints durch einen Klick auf die Zeilennummerierung zu setzen. In
                                    diesem Beispiel wurde ein Breakpoint in Zeile 14, vor der Deklaration der fahren-Funktion gesetzt. Im obersten Teil von Abschnitt (3) kann bei gesetztem Breakpoint der weitere Verlauf des Programms gesteuert werden.
                                    Hier kann man das Programm normal weiterlaufen lassen, einen Schritt überspringen oder in einen Ausdruck hinein bzw. heraus springen. Innerhalb des Reiters „Geltungsbereiche“, werden die einzelnen Scopes und die darin
                                    existierenden Variablen mit ihren Werten angezeigt. Im Web-Entwickler Tab des „Hamburger-Menüs“ existiert auch eine JavaScript Entwicklungsumgebung, in der man JavaScript Code schreiben und direkt ausführen kann. Diese
                                    Entwicklungsumgebung ist allerding seit der Firefox Version 70 veraltet und soll in Zukunft entfernt werden [vgl. Moz19d].
                                </p>
                                <h4 class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                                <p>
                                    In diesem Kapitel wurden die Firefox Konsole und der Debugger vorgestellt und aufgezeigt wie man sich mit diesen Tools die Fehlersuche erleichtern kann.
                                </p>
                                <h4 class="hider"><i class="pfeil-d"></i>Aufgaben</h4>
                                <div>
                                    <p class="uebung">
                                        Aufgabe 5.1<br> Wie kann auf die Konsole und den Debugger zugegriffen werden?
                                    </p>
                                    <p class="uebung">
                                        Aufgabe 5.2<br> Wie lautet eine Methode, um Nachrichten auf der Konsole auszugeben?
                                    </p>
                                    <p class="uebung">
                                        Aufgabe 5.3<br> Was sind Breakpoints?
                                    </p>
                                    <p class="uebung">
                                        Aufgabe 5.4<br> Welche Vorteile bietet der Debugger?
                                    </p>
                                </div>
                            </div>

                            <div class="center-paragraph">
                                <h3 class="hider" id="jquery"><i class="pfeil-d"></i>6 Ausblick auf das jQuery Framework</h3>
                                <div>
                                    <p>
                                        Da das Arbeiten mit dem Dom mühselig sein kann gibt es jQuery, eine JavaScript Bibliothek, welche neue Funktionen für verschiedene Anwendungsbereiche zur Verfügung stellt und so die Arbeit, insbesondere mit dem DOM erleichtert. jQuery kann direkt im &lt;script&gt;-Element
                                        in jedes HTML-Dokument eingebunden werden. Dazu fügt man im src-Attribut des Tags eine URI zu einer Onlinequelle von jQuery ein. Hat man die jQuery Bibliothek heruntergeladen, kann man diese auch lokal einbinden.
                                        Dazu muss der lokale Pfad zu der Bibliotheks-Datei angegeben werden. In vorherigen Kapiteln wurde auf die Problematik des Ladens von Skripten bevor der DOM-Baum vollständig aufgebaut ist hingewiesen. Hierfür bietet
                                        jQuery auch eine komfortablere Lösung an, als zum Beispiel einen DOMContentLoaded-EventHandler zu benutzen. In jQuery gibt es eine Funktion, die erst nach dem vollständigen Laden des DOM-Baumes aufgerufen wird.
                                        Diese Funktion sieht folgendermaßen aus:
                                    </p>
                                    <figure id="syntax6-1">
                                        <p class="syntax"> php
                                            <i>$</i> (document).ready(<i>function</i>() { Anweisungen }); <br> <i>$</i>(<i>function</i>() { Anweisungen });

                                            <i>$</i>(document).ready(<i>function</i>() { Anweisungen }); <br> <i>$</i>(<i>function</i>() { Anweisungen });
                                        </p>
                                        <figcaption>Syntax Beispiel 6.1: Ausführen von Anweisungen nach dem Laden des DOM-Baumes</figcaption>
                                    </figure>
                                    <p>
                                        Die zweite Variante ist eine abgekürzte Version der oberen Funktionsdeklaration. Die $(„Element“)-Funktion erlaubt es DOM-Elemente über eine CSS ähnliche Syntax zu selektieren. Anstatt jedes Element mit getElementByID oder ähnlichen Funktionen zu referenzieren
                                        wird die $-Funktion verwendet. „Die Funktion $() steht in jQuery für eine Kurzschreibweise, um ein Element der Webseite zu referenzieren“ [Ste18, S.31]. Mit dieser Funktion können Elemente zum Beispiel über ihre
                                        ID oder über Gruppenselektoren referenziert werden. Dies würde folgendermaßen aussehen:
                                    </p>
                                    <figure id="syntax6-2">
                                        <p class="syntax">
                                            <i>var</i> element = <i>$</i>(“#elementID“); <br> <i>var</i> element = <i>$</i>(“#id, .klasse“);
                                        </p>
                                        <figcaption>Syntax Beispiel 6.2: jQuery Selektoren</figcaption>
                                    </figure>
                                    <p>
                                        Die $-Funktion gibt immer ein arrayartiges Objekt zurück, während die DOM-Methode getElementByID()beispielsweise ein einzelnes Node-Objekt zurückgibt. Das Node-Objekt kann aber mittels eckiger Klammern und einem Index oder der get(“Index“)-Methode ausgelesen
                                        werden. jQuery bietet auch getter- und setter-Methoden, um auf Attribute zuzugreifen und diese zu modifizieren. Weiterhin bietet jQuery die css()-Methode an, die das manipulieren des Styles von HTML-Elementen vereinfacht.
                                        Mit dieser Methode kann über einen String-Parameter auf eine CSS-Eigenschaft zugegriffen werden und ein neuer Wert übergeben werden. In dem Kapitel ‚Zugriff auf den DOM-Baum‘ wurde die Manipulation des Styles und
                                        des Inhalts eines HTML-Elements mittels DOM-Methoden vorgestellt. In der folgenden Abbildung wird die gleiche Manipulation mit Hilfe von jQuery gezeigt:
                                    </p>
                                    <figure id="abb6-1">
                                        <img src="v02cmb-data/jQuery.png" alt="Abbildung jQuery" width="90%" border="1px solid" />
                                        <figcaption>Abbildung 6.1: DOM-Baum Manipulation mit jQuery</figcaption>
                                    </figure>
                                    <p>
                                        Innerhalb der ready()-Funktion wird das &lt;h1&gt;-Element mit der $-Funktion selektiert und anschließend mittels der css()- und html()-Funktion manipuliert. Die html()-Funktion ist das jQuery Äquivalent zu der DOM innerHTML-Methode (vgl. [Ste18, S 151]).
                                        jQuery bietet auch Methoden für das Event-Handling oder um Effekte und Animationen zu erzeugen. Informationen zu diesen und weiteren Themen sind in dem im Literaturverzeichnis angegebenen Buch „ jQuery - Das universelle
                                        JavaScript-Framework für das interaktive Web und mobile Apps“ von Ralph Steyer vorzufinden.
                                    </p>
                                    <h4 class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                                    <p>
                                        Dieses Kapitel gab einen kleinen Ausblick auf das jQuery Framework und dessen Vorteilen gegenüber der Arbeit mit den DOM-Methoden. Es wurde auf die Element-Selektion und die Manipulation dieser Elemente eingegangen.
                                    </p>
                                    <h4 class="hider"><i class="pfeil-d"></i>Aufgaben</h4>
                                    <div>
                                        <p class="uebung">
                                            Aufgabe 6.1<br> Wie wird das jQuery Framework in ein Skript eingebunden?
                                        </p>
                                        <p class="uebung">
                                            Aufgabe 6.2<br> Wie werden HTML-Elemente mit jQuery selektiert?
                                        </p>
                                        <p class="uebung">
                                            Aufgabe 6.3<br> Wie kann man in jQuery sicherstellen, dass das Skript erst nach dem Laden des DOM-Baumes ausgeführt wird?
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="center-paragraph">
                                <h4 id="loesungen" class="hider"><i class="pfeil-d"></i>A Lösungen</h4>
                                <div>
                                    <p>
                                        1.1) Man kann JavaScript Code direkt im HTML-Dokument einbringen oder als externe Datei die mit dem src-Attribut innerhalb des &lt;script&gt;-Tags verlinkt wird. Letzteres ist zu bevorzugen, da so HTML und JavaScript strikt getrennt bleiben.
                                        <br>1.2) JavaScript ist dynamisch typisiert, was höhere Flexibilität im Gegenzug für höhere Fehleranfälligkeit tauscht, da die Typen der Variablen nicht vor dem Programmablauf durch den Compiler überprüft wird.
                                        <br>1.3) Prototypen sind eine Art Blaupause für Objekte. Jedes Objekt hat ein Prototyp, von dem es erbt und somit dessen Attribute und Methoden übernimmt. Auf die Prototypen kann zugegriffen werden, um diese und
                                        die davon erbenden Objekte zu verändern.
                                        <br>2.1) In JavaScript gibt es keine Unterscheidung zwischen int, short, float oder double. Der Datentyp Number fasst all diese Elemente zusammen.
                                        <br>2.2) Der == Operator führt eine Typkonversion vor dem Vergleich durch, während der === Operator auf Wert- und Typ-Gleichheit prüft.
                                        <br>2.3) JavaScript Arrays sind dynamischer. Sie haben keine statische Länge und können als assoziative Arrays mit String-Indizes benutzt werden.
                                        <br>2.4) Die for-in-Schleife iteriert über die Namen der Eigenschaften eines Objektes. In Falle von Arrays sind dies die Indizes. Weiterhin ist bei for-in-Schleifen keine bestimmte Reihenfolge garantiert.
                                        <br>2.5) Vererbt wird über Prototypen oder durch den Aufruf der call()-Methode innerhalb des Konstruktors des untergeordneten Objektes.
                                        <br>2.6) Attribute können in einem zusätzlichen, innerhalb des Konstruktors deklarierten Objekt „versteckt“ werden. Der Zugriff muss dann über getter- und setter-Methoden erfolgen.
                                        <br>3.1) Genau wie bei der generellen Einbindung von Skripten in HTML-Dokumente soll das Ziel einer Trennung von HTML und JavaScript gewahrt bleiben.
                                        <br>3.2) Capturing Phase -> target-Phase -> Bubbling-Phase
                                        <br>3.3) Capturing arbeitet sich vom äußersten Element bis zum innersten Element durch, während Bubbling genau andersherum arbeitet.
                                        <br>3.4) Ajax ist ein Konzept für einen asynchronen Austausch von Daten zwischen dem Server und einer Anwendung. Es ermöglicht Datenübertragung, ohne ein neu laden der Webseite zu erfordern. Dadurch wird die Wartezeit
                                        für den Benutzer vermindert. Allerding führt es auch dazu das einige Browserfunktionen, wie der Rückwärts-Button nicht mehr richtig funktionieren.
                                        <br>4.1) Document-Node, Element-Nodes, Text-Nodes, Attribut-Nodes
                                        <br>4.2) Das name-Attribut ist nicht eindeutig. Außerdem hat das name-Attribut für manche HTML-Elemente unterschiedliche Bedeutungen.
                                        <br>4.3) Bei Verwendung von innerHTML wird der Text auch als HTML geparst.
                                        <br>5.1) Mit der F12 Taste oder dem „Hamburger-Menü“.
                                        <br>5.2) console.log()
                                        <br>5.3) Breakpoints sind vom Entwickler gesetzte Punkte im Code an denen die Programmausführung unterbrochen wird und dienen dem Debugging.
                                        <br>5.4) Der Debugger bietet eine gut strukturierte Übersicht über das Programm. Außerdem ermöglicht er es Variablen und deren Werte währen des Programmablaufs zu analysieren und das Programm Schritt für Schritt
                                        durchzulaufen.
                                        <br>6.1) Es kann online über eine URI oder bei heruntergeladener jQuery Bibliothek lokal eingebunden werden. Beide geschieht über das src-Attribut innerhalb des &lt;script&gt;-Tags.
                                        <br>6.2) Über die $-Funktion und einem CSS-ähnlichen Selektor.
                                        <br>6.3) Mit Hilfe der $(document).ready()-Funktion oder deren verkürzte Schreibweise.
                                    </p>
                                </div>
                            </div>

                            <div class="center-paragraph">
                                <h4 id="literatur" class="hider"><i class="pfeil-d"></i>B Literaturverzeichnis</h4>
                                <div>
                                    <p>
                                        [Sev12] C. Severance: „JavaScript: Designing a Language in 10 Days “, in: Computer Band 45 Ausgabe 2; IEEE, Februar 2012, DOI: 10.1109/MC.2012.57, S. 7-8. <br><br> [Ecm19a] ECMA International, ECMA-262 ECMAScript
                                        Language Specification 2019, Introduction;
                                        <a href="https://www.ecma-international.org/ecma-262/10.0/index.html#Title">https://www.ecma-international.org/ecma-262/10.0/index.html#Title </a>(10.11.19) <br><br> [Ecm19b] ECMA International, ECMA-262 ECMAScript
                                        Language Specification 2019, 6.1.6 The Number Type; <a href="https://www.ecma-international.org/ecma-262/10.0/index.html#Title">https://www.ecma-international.org/ecma-262/10.0/index.html#Title</a> (10.11.19)<br><br>                                        [Moz19a] Mozilla Web Docs, Grammar and Types, Variable hoisting; <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Grammar_and_types">https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Grammar_and_types</a>                                        (15.11.19) <br><br> [Moz19b] Mozilla Web Docs, DOMContentLoaded; <a href="https://developer.mozilla.org/de/docs/Web/Events/DOMContentLoaded">https://developer.mozilla.org/de/docs/Web/Events/DOMContentLoaded </a>                                        (22.11.19)<br><br> [Ste14] R. Steyer: JavaScript – Die universelle Sprache zur Web-Programmierung; Carl Hanser Verlag; München; 2014; ISBN 978-3-446-43942-9. <br><br> [Bew18] J. Bewersdorff: Objektorientierte Programmierung
                                        mit JavaScript: Direktstart für Einsteiger; Springer Vieweg; Wiesbaden, 2018; ISBN 978-3-658-21076-2. <br><br> [Jäg08] K. Jäger: Ajax in der Praxis; Springer Verlag; Berlin / Heidelberg, 2008; ISBN 978-3-540-69334-5.
                                        <br><br> [Ste18] R. Steyer: jQuery - Das universelle JavaScript-Framework für das interaktive Web und mobile Apps, 2. Auflage; Carl Hanser Verlag; München; 2018; ISBN: 978-3-446-45651-8. <br><br> [Moz19c] Mozilla
                                        Web Docs, Arguments-Object; <a href="https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Functions/arguments">https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Functions/arguments </a> (28.11.19)
                                        <br><br> [Moz19d] Mozilla Web Docs, Deprecated Tools; <a href="https://developer.mozilla.org/de/docs/Tools/Deprecated_tools">https://developer.mozilla.org/de/docs/Tools/Deprecated_tools </a> (29.11.19)

                                    </p>
                                </div>
                            </div>

                            <div class="center-paragraph">
                                <h4 id="abbildungen" class="hider"><i class="pfeil-d"></i>C Abbildungsverzeichnis</h4>
                                <div>
                                    <p>
                                        Abbildung 2.1: Vergleichsoperator Test <br> Abbildung 2.2: Hoisting anhand von var und let Variablen <br> Abbildung 2.3: Beispiel der Arrayerzeugung über den Konstruktor<br> Abbildung 2.4: Vergleich zwischen der
                                        for-in- und for-of-Schleife anhand eines Beispiels<br> Abbildung 2.5: Beispiel Zugriffsschutz und Vererbung <br> Abbildung 3.1: Vergleich Bubbling und Capturing <br> Abbildung 4.1: Beispiel DOM-Baum Manipulation
                                        <br> Abbildung 5.1: Ausgabe eines Objektes auf der Konsole <br> Abbildung 5.2: Funktion und Struktur des Firefox Debuggers <br> Abbildung 6.1: DOM-Baum Manipulation mit jQuery


                                    </p>
                                </div>
                            </div>

                            <div class="center-paragraph">
                                <h4 id="tabellen" class="hider"><i class="pfeil-d"></i>D Tabellenverzeichnis</h4>
                                <div>
                                    <p>
                                        Tabelle 3.1: Werte des readyState-Attributs [Jäg08, S.190]
                                    </p>
                                </div>
                            </div>

                            <div class="center-paragraph">
                                <h4 id="codes" class="hider"><i class="pfeil-d"></i>E Codebeispielverzeichnis</h4>
                                <div>
                                    <p>
                                        Syntax Beispiel 2.1: Erstellung von Arrays <br> Syntax Beispiel 2.2: Erstellung von assoziativen Arrays <br> Syntax Beispiel 2.3: If-Anweisung <br> Syntax Beispiel 2.4: Ternärer Operator <br> Syntax Beispiel 2.5:
                                        Switch-Case
                                        <br> Syntax Beispiel 2.6: while- und do-while-Schleife <br> Syntax Beispiel 2.7: for-Schleifen <br> Syntax Beispiel 2.8: Deklaration einer Funktion <br> Syntax Beispiel 2.9: Funktion mir Rest-Parameter <br> Syntax
                                        Beispiel 2.10: Erstellung eines Objektes über eine Konstruktor-Funktion <br> Syntax Beispiel 4.1: Selektion von HTML-Elementen mittels DOM-Methoden <br> Syntax Beispiel 6.1: Ausführen von Anweisungen nach dem Laden
                                        des DOM-Baumes <br> Syntax Beispiel 6.2: jQuery Selektoren <br>


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
  <div class="content-right"></div>
</div>
<?php include('includes/footer.php'); ?>
</div>
<script src="scripts.js"></script>
</body>

</html>