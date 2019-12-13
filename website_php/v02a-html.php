<?php
$topic = 'html';
include('includes/header.php');
?>
    <div class="content-left">
        <nav class="contentnav">
            <ul>
                <li><a href="#einleitung">1 Einleitung</a></li>
                <li><a href="#Steuerelemente">2 Grundlegende Steuerelemente</a></li>
                <li><a href="#formulare">3 Formulare und Formulardaten</a></li>
                <li><a href="#dom">4 Das Dokument-Object-Modell</a></li>
                <li><a href="#html5">5 Neuerungen in HTML5</a></li>
                <hr>
                <li><a href="#loesungen">A Lösungen</a></li>
                <li><a href="#literatur">B Literaturverzeichnis</a></li>
                <li><a href="#abbildungen">C Abbildungsverzeichnis</a></li>
                <li><a href="#codevz">D Codeverzeichnis</a></li>
            </ul>
        </nav>
    </div>
    <div class="content-center">
        <h1>Die Sprache HTML im Detail</h1>
        <hr>
        <br>
        <p class="beschreibung">
            <img id="chapter-logo" src="v02a-data/logo.png" alt="HTML Logo" /> HTML ist eine Auszeichnungssprache, die zur Erstellung von Inhalten im World Wide Web genutzt wird. Ein HTML-Dokument bildet die Grundlage einer Website, und legt die
            Struktur der Inhalte auf der Website fest. In diesem Skript werden ihnen die Grundlagen dieser Sprache erläutert. <br>
        </p>
        <a id="skriptlink" href="v02a-data/HTML im Detail.pdf" target="_blank">→ HTML im Detail ←</a>
        <p class="author">
            Autor: Julian Schlee
        </p>
        <br><br>
        <div class="leseprobe">
            <div class="center-paragraph">
                <h3 id="einleitung">1 Einleitung</h3>
            </div>
            <div class="einfuehrung clearfix">
                <p> In diesem Kapitel wird zu Beginn kurz die Geschichte der Entstehung der Sprache HTML erzählt, um dem Leser einen ersten Einblick in den Nutzen der Sprache HTML zu geben, und ihm zu verdeutlichen welchen Einfluss die Sprache auf
                    unser heutiges World-Wide-Web hat. Anschließend wird der Begriff „HTML“ sowie die grundlegende Funktion der Sprache erläutert. Nach dem durchlesen dieses Kapitels sollten Sie verstanden haben:
                </p>
                <ul>
                    <li>wofür die Sprache HTML genutzt wird,</li>
                    <li>welche Bedeutung sie in unserem Zeitalter hat,</li>
                    <li>warum HTML essenziell für die Erstellung von Websites ist und</li>
                    <li>was HTML-Elemente sind und welchen Zweck sie erfüllen</li>
                </ul>
            </div>

            <div class="center-paragraph">
                <h4 id="entstehung" class="hider"><i class="pfeil-d"></i>1.1 Die Entstehung von HTML</h4>
                <p>
                    Das Konzept der Sprache HTML wurde 1989 von Sir Tim Berners Lee entwickelt. Er arbeitete damals an einer Forschungseinrichtung, der Europäischen Organisation für Kernforschung(CERN), in der Schweiz. Dort begann er 1989 an einem Projekt zu arbeiten, welches
                    den Ursprung des heutigen World-Wide-Webs darstellt. Das Ziel dieses Projektes war, die Dokumente der verschiedenen Forschungsinstitute elektronisch zugänglich zu machen, um den weltweiten Austausch von Informationen zwischen
                    den Wissenschaftlern zu erleichtern. (vgl. [RL, Kapitel 1]) <br> Dazu entwickelte er 1990 den ersten Webserver (CERN httpd) um die Dokumente veröffentlichen zu können, und den ersten Browser (WorldWideWeb)
                    um die Dokumente abrufen zu können, sowie in der Folgezeit die URI und das Transferprotokoll HTTP. (vgl. [Be19]) <br> Damit diese Dokumente von einem Browser in einem gewünschten Format interpretiert und dargestellt werden
                    können, suchte er nach einem Weg die Dokumente strukturieren zu können, und durch sogenannten Hypertext, direkte Referenzen auf andere Dokumente setzten zu können. Genau an diesem Punkt kam der Ansatz für die Textauszeichnungssprache
                    HTML ins Spiel. (vgl. [RL, Kapitel 1]) <br> Durch kontinuierliche Updates der Sprache schuf er ein Werkzeug welches dem Nutzer ermöglicht sehr einfach die Grundstruktur einer Website festzulegen. <br> Da heutzutage nahezu jede
                    Website auf einer HTML-Grundstruktur basiert, schuf er damals gleichzeitig auch den weltweiten Standard der heutigen Webentwicklung. <br> Heutzutage ist jeder gängige Browser in der Lage einen HTML-Quellcode zu interpretieren.
                    <br>
                </p>
            </div>

            <div class="center-paragraph">
                <h4 id="wasIstHTML" class="hider"><i class="pfeil-d"></i>1.2 Was ist HTML?
                </h4>
                <div>
                    <p>
                        Der Begriff HTML steht für Hypertext Markup Language. <br> Die Sprache HTML ist ein Dialekt der Metasprache SGML(Standard Generalized Markup Language), welche schon „ab 1960 Texte standardisieren und für den Computer lesbar
                        machen sollte“. (vgl. [Se18] ) <br> Wie der Begriff Markup-Language bereits aussagt, handelt es sich bei HTML und SGML nicht um klassische Programmiersprachen wie etwa Java oder C++, sondern um Auszeichnungssprachen. Dies
                        bedeutet es gibt keine Funktionen, Bedingungen oder Variablen. <br> HTML wird also benutzt, um bestimmte Teile eines Dokuments auszuzeichnen, und dadurch dem Browser zu sagen wie er diese zu interpretieren und darzustellen
                        hat. Diese Teile werden Elemente der Website, bzw. des Codes genannt. <br> Auf diese Weise lässt sich die grundlegende semantische Struktur einer Website festlegen. <br> Allerdings ist es durch HTML nicht möglich, weitgehende
                        Einstellungen an der visuellen Darstellung der Website festzulegen, oder dynamische Funktionen einzubauen wie z.B. Drop-Down-Menüs. Dafür werden weitere Dateien in den HTML-Quellcode eingebunden, welche durch andere Sprachen
                        wie CSS oder JavaScript erstellt werden. <br>
                        <q>
                            HTML beschreibt nicht, wie ein Element aussieht oder wo es platziert ist, HTML
                            beschreibt, was ein Element ist – eine Überschrift, eine Liste, ein Bild, eine
                            Tabelle.
                            [Sc08 , S43]
                        </q>
                        <br> Ein HTML-Quellcode kann in einem üblichen Text-Editor verfasst und bearbeitet werden, und benötigt keinen speziellen Editor oder IDE. Ebenso kann jede HTML-Datei einfach durch einen Browser geöffnet werden, in welchem
                        dann die Darstellung des Codes erscheint. <br>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="htmlElemente" class="hider"><i class="pfeil-d"></i>1.3 HTML-Elemente</h4>
                <div>
                    <p>
                        Jeder HTML-Quellcode besteht aus mehreren einzelnen Elementen, welche jeweils einen Teil einer Website repräsentieren, wie z.B. ein Textabschnitt, ein Bild oder auch die Navigationsleiste. <br> Jedes Element wird durch
                        ein bestimmtes Tag gekennzeichnet. Dies ist nötig, damit der Browser weiß um welche Art von Inhalt es sich handelt, und wie er diesen zu interpretieren hat. <br> Der Aufbau eines HTML-Elements hat die folgende Struktur:
                        <br>
                        <figure>
                    <p class="code" style="border:2px solid black;">
                        &lt;Tag-Name > Inhalt des Elements &lt;/Tag-Name >
                    </p>
                    <figcaption>Code 1.1 - Der Aufbau eines HTML-Elements</figcaption>
                    </figure>
                    Durch das Setzen eines Start- und eines End-Tags wird der Beginn und das Ende des Inhalts gekennzeichnet. Diese Tags werden immer in spitzen Klammern <i class="ilcode">
                        <>
                    </i> eingeschlossen und das End-Tag wird durch ein <i class="ilcode">/</i> vor dem Tag-Namen eingeleitet. Dadurch wird auch gewährleistet, dass immer nur der Inhalt und nie die Tags selbst dargestellt werden.<br> Diese
                    Elemente können auch ineinander verschachtelt werden, dazu müssen aber bestimmte Regeln eingehalten werden. Eine Navigationsleiste ist beispielsweise oft aus einer Liste und mehreren Listeneinträgen, welche die Buttons
                    darstellen, zusammengesetzt. Dabei wird jeder Listeneintrag als einzelnes Element innerhalb eines Listen-Elements definiert.
                    <br> Hierbei ist wichtig zu beachten, dass Start- und End-Tags immer ebenentreu verschachtelt sind. Dies bedeutet, dass nach dem Öffnen eines Elementes welches innerhalb eines anderen definiert wird, kein End-Tag des Elternelementes
                    folgen darf, bevor das Tag wieder geschlossen wurde. <br> Um die Elemente genauer spezifizieren zu können, beinhalten Elemente auch verschiedene Attribute. <br>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="zusammenfassung-1" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                <p>
                    In diesem Kapitel wurde ihnen kurz erklärt wie die Sprache HTML entstanden ist und was die ursprüngliche Idee dahinter war. Dabei sollte ihnen auch die Bedeutung der Sprache in der heutigen Zeit nahegelegt werden. <br> Im Anschluss
                    wurde noch der Begriff „HTML“ sowie die Funktion der Sprache erläutert, und noch ein kurzer Ausblick auf die Grenzen des mit HTML Möglichen gewährt. <br> Zuletzt wurde ihnen erklärt wie HTML-Elemente aufgebaut sind, und wozu
                    diese dienen. <br>
                </p>
            </div>

            <div class="center-paragraph">
                <h4 id="uebungen-1" class="hider"><i class="pfeil-d"></i>Aufgaben zur Selbstüberprüfung</h4>
                <div>
                    <p>
                    <p class="uebung">
                        <b>Aufgabe 1.1:</b><br> Wozu wird die Sprache HTML benutzt? <br>
                    </p>
                    <p class="uebung">
                        <b>Aufgabe 1.2: </b><br> Warum ist die Sprache HTML so wichtig für unser World-Wide-Web? <br>
                    </p>
                    <p class="uebung">
                        <b>Aufgabe 1.3: </b><br> Wozu wird die Sprache HTML benutzt? <br>
                    </p>
                    <p class="uebung">
                        <b>Aufgabe 1.4: </b><br> Wo liegen die Grenzen von HTML?<br>
                    </p>
                    </p>
                </div>
            </div>


            <div class="center-paragraph">
                <h3 id="Steuerelemente">2 Grundlegende Steuerelemente</h3>
                <div class="einfuehrung">
                    In diesem Kapitel werden ihnen zu Beginn die Basiselemente der Sprache vorgestellt, welche benötigt werden, um die Grundstruktur eines HTML-Dokuments zu bilden. <br> Anschließend werden ihnen die wichtigen Steuerelemente vorgestellt,
                    welche zur Strukturierung des Seiteninhalts genutzt werden können.<br> Nach dem lesen dieses Kapitels sollten Sie:
                    <ul>
                        <li>Den Aufbau eines HTML-Dokuments verstanden haben,</li>
                        <li>die Möglichkeiten der Strukturierung des Seiteninhalts kennengelernt haben, </li>
                        <li>und in der Lage sein ein eigenes, gültiges HTML-Dokument zu verfassen.</li>
                    </ul>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="grundstruktur" class="hider"><i class="pfeil-d"></i>2.1 Die Grundstruktur eines HTML-Dokuments
                </h4>
                <div>
                    <p>
                        Ein gültiges HTML-Dokument muss den vom World-Wide-Web-Consortium (W3C) festgelegten Standard erfüllen, um von Browsern richtig interpretiert werden zu können. Dazu muss der Quellcode alle Basis-Elemente der Sprache HTML enthalten, sowie die Angabe eines
                        gültigen Dokumenttyps.
                    </p>
                    <div class="center-paragraph">
                        <h4 id="dokumenttyp" class="hider"><i class="pfeil-d"></i>2.1.1 Die Angabe des Dokumenttyps
                        </h4>
                        <div>
                            <p>
                                Da es heutzutage viele verschiedene Versionen der Sprache HTML gibt muss zu Beginn des Dokuments immer der Dokumenttyp angegeben werden. Dieser beschreibt die verwendete Version der Sprache der HTML, mit welcher der Quellcode geschrieben wurde. <br>                                        Seit der Version HTML5 wurde die Angabe des Dokumenttyps deutlich vereinfacht und geschieht seitdem wie folgt: <br>
                                <figure>
                            <p class="code" style="border:2px solid black;">
                                &lt;!DOCTYPE HTML >
                            </p>
                            <figcaption>Code 2.1 – Dokumenttypdeklaration in HTML5</figcaption>
                            </figure>
                            Wichtig hierbei ist, dass diese Angabe immer in der <b>ersten Zeile</b> des Dokuments stehen muss, damit der Browser den nachfolgenden Code richtig interpretieren kann. <br> In der Version HTML4.01 war dies noch
                            umständlicher und geschah folgendermaßen:
                            <br> <br>
                            <figure>
                                <p class="code" style="border:2px solid black;">
                                    &lt;!DOCTYPE HTML PUBLIC "-//W3C//DTsD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
                                </p>
                                <figcaption>Code 2.2 – Dokumenttypdeklaration in HTML4.01</figcaption>
                            </figure>
                            </p>
                        </div>
                    </div>
                    <div class="center-paragraph">
                        <h4 id="wurzelelement" class="hider"><i class="pfeil-d"></i>2.1.2 Das html-Wurzelelement
                        </h4>
                        <div style="position:relative">
                            <p>
                                Des Weiteren muss ein gültiges HTML-Dokuments alle Basis-Elemente der Sprache HTML enthalten. <br> Diese sind ineinander verschachtelt und beginnen mit dem <i class="code">
                                    &lt;html></i>-Tag. Dieses Element umschließt das gesamte Dokument und dient als Container für weitere Elemente die innerhalb davon definiert werden. Deswegen wird es oft auch als Wurzelelement des Dokuments
                                bezeichnet. <br> Mittels <i class="code">lang</i>-Attributes, kann dazu noch die Sprache des Seiteninhaltes angegeben werden. Attribute werden in HTML immer in das Start-Tag geschrieben, und meistens durch ein Keyword-Value-Paar
                                definiert. <br>
                                <figure>
                            <p class="code" style="border:2px solid black;"> &lt;html lang=“de“> … &lt;/html ></p>
                            <figcaption>Code 2.3 - Das html-Element mit einem lang-Attribut</figcaption>
                            </figure>
                            In diesem Beispiel steht <i class="code">“de“</i> für Deutsch, aber weitere Angaben wie z.B. <i class="code">“en“</i> für Englisch sind auch möglich. <br>
                            </p>
                        </div>
                    </div>
                    <div class="center-paragraph">
                        <h4 id="headbody" class="hider"><i class="pfeil-d"></i>2.1.3 Das head- und body-Element
                        </h4>
                        <div>
                            <p>
                                Das <i class="code">head</i>-Element dient als Container für Metainformationen. In ihm werden Informationen über den Inhalt der Website angegeben, wie z.B. der Titel der Seite oder der verwendete Zeichensatz. Der
                                Titel der Website wird durch das <i class="code">title</i>-Element angegeben und ist ebenfalls ein Pflichtelement.
                                <br> Die Angabe des Titels geschieht über das <i class="code">title</i>-Element innerhalb des <i class="code">head</i>-Elements. <br>
                                <figure>
                            <p class="code" style="border:2px solid black;">
                                &lt;head> <br> &lt;title>Seitentitel&lt;/title> <br> &lt;/head> <br>
                            </p>
                            <figcaption>Code 2.4 – Ein title-Element innerhalb des head-Elements
                            </figcaption>
                            </figure>
                            Der angegebene Title erscheint dadurch im Browser als Name des Tabs. Über das Element <i class="code"> &lt;style></i> ist es möglich, mittels der Sprache CSS, innerhalb des HTML-Quellcodes bestimmte Angaben über
                            das Design der Seite zu definieren. <br> Um den Inhalt von dem Design zu trennen, sollte aber lieber eine externe CSS-Datei über das <i class="code"> &lt;link></i>-Element eingebunden werden.
                            <br> Für die Angabe weiterer Meta-Informationen wird das Tag <i class="code">
                                &lt;meta></i> verwendet. Als Beispiel die Angabe des Zeichensatzes durch das Attribut <i class="code">„charset“</i>: <br>
                            <figure>
                                <p class="code" style="border:2px solid black;"> &lt;meta charset=“UTF-8“>
                                </p>
                                <figcaption>Code 2 5 - Angabe des Zeichensatzes mit dem charset-Attribut innerhalb eines meta-Elements</figcaption>
                            </figure>
                            Diese Angabe sollte stets getätigt werden um die korrekte Darstellung von Textzeichen (vor allem Umlauten) zu gewährleisten. <br> <br> Weitere Informationen, wie z.B. der Autor der Website, eine Beschreibung der
                            Seite oder zugehörige Keywords können über die Attribute <i class="code">name</i> und <i class="code">content</i> angegeben werden. <br>
                            <figure>
                                <p class="code" style="border:2px solid black;">
                                    &lt;meta name=“author“ content=“author-name“> <br> &lt;meta name=“keywords“ content=“HTML, CSS, WEB“> <br>
                                </p>
                                <figcaption>Code 2.6 - Angabe des Autors und von Keywords mit content- und name-Attributen innerhalb eines meta-Elements</figcaption>
                            </figure>
                            Innerhalb des <i class="code">body</i>-Elements wird der eigentliche (sichtbare) Inhalt der Seite definiert.<br>
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="ggkomplett" class="hider"><i class="pfeil-d"></i>2.1.4 Das komplette Grundgerüst
                        </h4>
                        <div>
                            <p>
                                Nimmt man nun all diese Pflichtelemente zusammen enthält man das Grundgerüst eines HTML-Dokuments welches dem Standard des W3C entspricht. <br> Dieses wird folgendermaßen notiert: <br>
                                <figure>
                                    <img src="./v02a-data/abb_2.1.PNG" alt="Bild konnte nicht geladen werden" style="border:2px solid black" width="85%">
                                    <figcaption>Abbildung 2.1 - Das HTML Grundgerüst</figcaption>
                                </figure>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="seiteninhalt" class="hider"><i class="pfeil-d"></i>2.2 Die Strukturierung des Seiteninhaltes
                </h4>
                <div>
                    <p>
                        Nach dem das Grundgerüst des Quellcodes gestellt ist, kann der eigentliche Inhalt der Website in das <i class="ilcode">body</i>-Element geschrieben werden.<br> HTML bietet hierfür viele Tags an, mit denen z.B. einzelne
                        Bereiche eines Textes ausgezeichnet und dadurch das Dokument strukturiert werden kann.<br>
                    </p>
                    <div class="center-paragraph">
                        <h4 id="textstruktur" class="hider"><i class="pfeil-d"></i>2.2.1 Strukturierung von Texten
                        </h4>
                        <div>
                            <p>
                                Sie können beispielsweise damit anfangen, ihrer Website eine Überschrift zu geben.
                                <br> Dafür stellt HTML die Elemente <i class="ilcode"> &lt;h1> – &lt;h6></i> bereit, welche in aufsteigender Nummerierung immer kleiner werden. Dadurch können verschiedene Ebenen eines Textes durch verschiedene
                                Arten von Überschriften repräsentiert werden. <br> Um einen einfachen Text auf die Website einzufügen, wird das <i class="ilcode">
                                    &lt;p></i>-Element (<i>paragraph</i>) benutzt. Im Allgemeinen ist es üblich, einzelne Abschnitte eines Textes in diesen Tags zu gliedern. <br> <br> Ein Text oder bestimmte Teile davon, können auch durch die
                                Tags <i class="ilcode"> &lt;em></i> , <i class="ilcode"> &lt;strong></i> und <i class="ilcode"> &lt;small></i> hervorgehoben bzw. verkleinert werden. Alternativ können über das <i class="ilcode"> &lt;span></i>-Element,
                                Teile eines Textes ausgezeichnet und später bearbeitet werden. <br> <br> Zitate können durch das <i class="ilcode"> &lt;q>-Tag</i> markiert werden, und werden in dadurch in Anführungszeichen dargestellt. <br> <br>                                        Möchte man innerhalb eines Paragrafen einen Zeilenumbruch platzieren, kann man dies über das <i class="ilcode"> &lt;br></i>-Tag(<i>line break</i>) tun.
                                <br> <br> Das <i class="ilcode"> &lt;hr></i>-Element<i>(horizontal ruler)</i> stellt auf der Website eine horizontale Linie dar. Dies wird häufig benutzt, um thematische Brüche in einem Text zu signalisieren.<br>                                        Hierbei ist zu beachten das dieses Element (br & hr) anstatt aus Start- und End-Tag, nur aus einem einzelnen Tag besteht und keinen Inhalt haben. Dies nennt sich <i>Standalone-Tag</i>. <br> <br> Als Beispiel finden
                                Sie hier einen HTML-Quellcode und dessen Darstellung in einem Browser:
                            </p>
                            <figure>
                                <img src="./v02a-data/abb_2.2.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                                <figcaption>Abbildung 2.2 – Eine beispielshafte Textstrukturierung
                                </figcaption>
                            </figure>

                        </div>
                    </div>


                    <div class="center-paragraph">
                        <h4 id="textstruktur" class="hider"><i class="pfeil-d"></i>2.2.2 Listen</h4>
                        <div>
                            Für Listen und Aufzählungen, stellt HTML drei verschiedene Varianten zur Verfügung, wobei alle Varianten unterschiedliche Darstellungen haben. <br> Dabei wird zwischen einer ungeordneten Liste, einer geordneten/nummerierten
                            Liste sowie einer Definitionsliste unterschieden. <br> Der Aufbau der geordneten und ungeordneten Liste ist exakt ist derselbe, lediglich die Definitionsliste unterscheidet sich diesbezüglich. <br>

                            <h4>Die ungeordnete Liste (ul)</h4>
                            <p>
                                Bei einer ungeordneten Liste handelt es sich um eine einfache Aufzählung ohne Nummerierung. Dies bedeutet, dass die einzelnen Listeneinträge lediglich durch ein Aufzählungszeichen eingeleitet werden. <br> <br> Um
                                eine ungeordnete Liste zu erstellen verwendet man das <i class="ilcode">
                                    &lt;ul></i>-Tag. (<i>unordered list</i>) <br> <br> Innerhalb dieses Tags können durch das <i class="ilcode"> &lt;li></i>-Tag einzelne Listeneinträge definiert werden. <br> <br> Standardgemäß wird das Aufzählungszeichen
                                durch einen ausgefüllten Kreis repräsentiert, aber durch das <i class="ilcode">style</i>-Attribut innerhalb des <i class="ilcode"> &lt;ul></i>-Tags ist es durch eine Anweisung in der Style-Sprache CSS möglich, die
                                Darstellung der Aufzählungszeichen zu verändern. <br> <br> Hier ein Beispiel einer ungeordneten Liste mit <i class="ilcode">style</i>-Attribut, und ihre Darstellung: <br>
                                <figure>
                                    <img src="./v02a-data/abb_2.3.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                                    <figcaption>Abbildung 2.3 – Eine ungeordnete Liste mit style-Attribut
                                    </figcaption>
                                </figure>
                            </p>


                            <h4>Die geordnete Liste (ol)</h4>
                            <p>
                                Bei der geordneten/nummerierten Liste handelt es sich um eine Zählliste, welche ihren Einträgen automatisch eine Ziffer zuweist und diese fortlaufend nummeriert. <br> <br> Wie bereits erwähnt hat die geordnete Liste
                                fast denselben Aufbau wie die ungeordnete Liste, lediglich die Erstellung der Liste wird hier durch das <i class="ilcode"> &lt;ol></i>-Tag (<i>ordered list</i>) eingeleitet. <br>
                                <br> Standardgemäß wird der erste Eintrag mit der Ziffer 1 versehen. Dies kann aber durch das <i class="ilcode">start</i>-Attribut innerhalb des <i class="ilcode"> &lt;ol></i>-Tags geändert werden. Auch die Nummerierung
                                einzelner Listeneinträge kann durch das <i class="ilcode">value</i>-Attribut angepasst werden. Darauffolgende Einträge setzen dadurch aber automatisch bei diesem Wert fort. <br> <br> Möchte man anstatt Ziffern lieber
                                Buchstaben oder Römische Ziffern verwenden, ist dies durch das <i class="ilcode">type</i>-Attribut möglich. Der Wert „1“ repräsentiert hierbei die Ziffern, „A“ bzw. “a“ repräsentieren Groß-/Kleinbuchstaben und „I“
                                bzw. “i“ repräsentieren große- bzw. kleine römische Ziffern. <br> <br> Hier ein Beispiel einer geordneten Liste mit <i class="ilcode">type</i>- und
                                <i class="ilcode">start</i>-Attribut, und ihre Darstellung: <br> <br>
                                <figure>
                                    <img src="./v02a-data/abb_2.4.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                                    <figcaption>Abbildung 2.4 - Eine geordnete Liste mit type- und start-Attribut
                                    </figcaption>
                                </figure>
                            </p>

                            <h4>Die Definitionsliste (dl)</h4>
                            <p>Bei der Definitionsliste handelt es sich um eine Liste bei der jedem Eintrag eine Beschreibung zugewiesen werden kann. Diese eignet sich besonders gut, um eine Liste von Begriffen zu definieren.<br> <br> Eine Definitionsliste
                                wird mit dem <i class="ilcode"> &lt;dl></i>-Tag eingeleitet. Dazwischen werden die einzelnen Definitionslisten-Terme durch
                                <i class="ilcode"> &lt;dt></i>-Tags definiert. Dazwischen wiederum wird dann die Definitions-Beschreibung(<i>definition description</i>) durch das <i class="ilcode"> &lt;dd></i>-Tag definiert. Ein Term kann hierbei
                                mehrere Beschreibungen haben.<br> <br> Nachfolgend ein Beispiel einer Definitionsliste, und ihre Darstellung in einem Browser: <br>
                                <figure>
                                    <img src="./v02a-data/abb_2.5.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                                    <figcaption>Abbildung 2.5 - Der Quellcode einer Definitionsliste und ihre Darstellung</figcaption>
                                </figure>
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="textstruktur" class="hider"><i class="pfeil-d"></i>2.2.3 Bilder und Figuren
                        </h4>
                        <div>
                            <p>
                                Über das <i class="code">img</i>-Element ist es möglich, Bilder oder animierte GIF-Dateien in eine Website einzubinden.<br><br> Dieses Element wird als Standalone-Tag realisiert und wird lediglich über seine Attribute
                                definiert.<br> <br> Die Angabe des <i class="code">src</i>- und des <i class="code">alt</i>-Attributs sind hierbei notwendig, um das Bild darstellen zu können. <br> <br> Das <i class="code">alt</i>-Attribut (<i>alternative</i>)
                                bekommt als Wert einen Text übergeben, welcher angezeigt werden wird, falls das Bild nicht korrekt geladen werden konnte. <br> <br> Über das <i class="code">src</i>-Attribut (<i>source</i>) muss die Quelle des Bildes
                                definiert werden. Dabei wird dem Attribut entweder eine URL oder eine relative Pfadangabe zum Ablageort des HTML-Dokuments zugewiesen. Befindet sich das Bild in demselben Ordner wie die HTML-Datei in die es eingebunden
                                wird, so kann dem Attribut als Wert einfach der Name des Bildes als Wert zugewiesen werden <br> <br> Hier als kleines Beispiel eine relative Pfadangabe und eine URL, als Wert des src-Attributes: <br>
                                <figure style="border:2px solid black;">
                            <p class="code">
                                &lt;img src="bild.jpg" alt=“Alternativtext“> <br> &lt;img src=“https://www.website.com/bild.jpg“ alt=“Alternativtext“> <br>
                            </p>
                            <figcaption>Code 2.7 – Die möglichen Pfadangaben durch ein src-Attribut des img-Elements.</figcaption>
                            </figure>
                            Weitere Attribute, welche genutzt werden können, um die Maße des Bildes anzugeben, sind <i class="code">width</i> und <i class="code">height</i>. Seit der Version HTML5 wird als Wert nur noch die Angaben in Pixeln
                            zugelassen. Es können keine Maßeinheiten mehr angegeben werden. Um die Ladezeit der Website zu verbessern wird stets empfohlen diese Werte anzugeben.<br><br> Möchte man dem Bild eine Beschreibung hinzufügen, ist
                            dies möglich in dem man das <i class="code">img</i>-Element innerhalb eines figure
                            </i>-Elements definiert. Dazu wird neben dem img-Element noch ein
                            <i class="code">figcaption</i>-Element definiert, welches als Inhalt den Beschreibungstext des Bildes bekommt.<br> <br> Als Beispiel ein Quellcode eines eingebundenen Bildes mit einem Beschreibungstext, und die
                            dazugehörige Darstellung in einem Browser:
                            <br>
                            <figure>
                                <img src="./v02a-data/abb_2.6.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                                <figcaption>Abbildung 2.6 – Einbindung eines Bildes, mit einem Beschreibungstext und Maßangaben [Re19]</figcaption>
                            </figure>
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="textstruktur" class="hider"><i class="pfeil-d"></i>2.2.4 Referenzen</h4>
                        <div>
                            <p>
                                Bei der Entwicklung von HTML war es ein grundlegender Wunsch von Sir Tim Berners Lee, dass es möglich sein sollte, innerhalb eines Dokumentes direkte Referenzen auf ein anderes Dokument setzen zu können, und diese mit nur einem Klick erreichen zu können.
                                Oft nennt man diesen Vorgang auch das „linken“ eines anderen Dokuments. Dies ist ebenfalls die grundlegende Methode, um die Navigation von einer Seite zu einer anderen zu ermöglichen.
                            </p>

                            <h4>Das anchor-Tag</h4>
                            <p>
                                Möchte man in HTML eine Referenz zu etwas setzen, geschieht dies immer über das anchor-Element, welches mit einem <i class="code">
                                    &lt;a></i>-Tag eingeleitet wird, und durch <i class="code">
                                    &lt;/a></i>-Tag geschlossen wird. <br> <br> Innerhalb dieses Tag muss über das <i class="code">href</i>-Attribut die Quelle des zu verlinkenden Dokuments angegeben werden. Der Begriff <i class="code">href</i>                                        steht hierbei für <i>Hypertext-Reference</i>. Genau wie bei der Verknüpfung von Bildern, geschieht dies entweder über eine URL die zu diesem Dokument verweist, oder durch eine relative Pfadangabe zu dem Ablageort
                                des HTML-Dokuments. <br> <br>
                                <figure>
                            <p class="code">
                                &lt;a href=“einDokument.html“ …. > Ich bin ein Link &lt;/a> <br> &lt;a href=“https://www.eine-website.de/einDokument.html“ … > Ich bin ein Link &lt;/a>
                            </p>
                            <figcaption>Code 2.8 – Die möglichen Pfadangaben beim Setzen einer Referenz durch das href-Attribut</figcaption>
                            </figure>
                            Zwischen diesen Tags wird der Inhalt dieses Elements platziert. Dabei kann es sich um einen einfachen Text, als auch um Bilder oder ähnliches handeln. Wird ein Text angegeben, so wird dieser, innerhalb des Browsers, unterstrichen und in blauer Farbe dargestellt.
                            Dies dient dazu dem Nutzer zu signalisieren, dass es sich um einen Link und nicht um einen normalen Text handelt. <br> <br> Fährt der Nutzer mit seinem Cursor über diesen
                            Link oder das Bild, ändern sich das Cursorzeichen zu einer Hand. Durch einen Klick auf diesen Link oder das Bild, wird dann die referenzierte Seite geöffnet.
                            <br> <br>
                            </p>

                            <h4>Das target-Attribut</h4>
                            <p>
                                Mittels des <i class="ilcode">target</i>-Attributs wird festgelegt, wie genau das referenzierte Dokument geöffnet wird. <br> <br> Der Wert <i class="ilcode">_blank</i> deutet hierbei darauf hin, dass das Dokument
                                in einem neuen Browser-Tab geöffnet werden soll. Soll das Dokument in demselben Fenster geöffnet in dem der Link angeklickt wurde, wird der Wert <i class="ilcode">_self</i> benutzt. Weiter mögliche Werte sind
                                <i
                                        class="ilcode"></i> und <i class="ilcode">_parent</i>. Diese öffnen das Dokument in dem obersten bzw. in dem Elternframe des aktuellen Elements. <br> <br> Nachfolgend finden Sie ein Beispiel von einem Quellcode der mittels
                                <i
                                        class="ilcode">anchor</i>-Element und <i class="ilcode">href</i>-Attribut ein anderes HTML-Dokument (main.html) referenziert. Da es sich bei dem Inhalt um eine <i class="ilcode">figure</i> mit <i class="ilcode">img</i> und
                                <i class="ilcode">figcaption</i> handelt, und als target <i class="ilcode">„_blank“</i> angegeben wurde, wird diese Referenz in Form eines Bildes mit einem dazugehörigen Link dargestellt. Durch einen Klick
                                wird das referenzierte Dokument in einem neuen Browserfenster geöffnet. <br> <br>
                                <figure>
                                    <img src="./v02a-data/abb_2.7.png" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                                    <figcaption>Abbildung 2.7 - Referenzierung des Dokuments „main.html“, durch ein anchor um das eingebundene Bild [Re19]
                                    </figcaption>
                                </figure>
                            </p>

                            <h4>Das download-Attribut</h4>
                            <p>
                                Über das Attribut <i class="ilcode">download</i>, ist es möglich dem Nutzer das Herunterladen der referenzierten Datei zu ermöglichen. Dieses Attribut wird ebenfalls in das <i class="ilcode">anchor</i>-Tag geschrieben.
                                Weist man diesem Attribut einen Wert zu, dann legt man dadurch einen default-Namen für die Datei fest. <br> <br> Anstatt den Nutzer auf ein anderes Dokument weiterzuleiten, wird durch einen Klick auf das referenzierte
                                Element ein Downloadfenster geöffnet. Hier kann der Nutzer wie üblich den Ablageort der Datei bestimmen und diese dort speichern. <br> <br>
                            </p>

                            <h4>Sprünge und id’s/div‘s</h4>
                            <p>
                                Des Weiteren ermöglicht das Anchor-Element, Verweise auf bestimmte Teile der Website erstellen zu können. Dies ermöglicht dem Nutzer durch einen Klick von einem Abschnitt der Seite zu einem anderen zu Springen. Dies kann beispielsweise langes Scrollen
                                durch Texte vermeiden, weil dadurch ein bestimmtes Kapitel direkt angesprungen werden kann. <br> <br> Dazu muss das Ziel des Sprungs durch eine frei wählbare <i class="code">id</i>                                        ausgezeichnet werden. Jedem HTML-Element kann eine <i class="code">id</i> zugewiesen werden, um dieses eindeutig identifizieren zu können. Der Name besteht aus Text und darf keine Leerzeichen enthalten. <i class="code">Id</i>’s
                                werden ebenfalls verwendet, um die weitere Verarbeitung durch andere Web-Sprachen zu ermöglichen. <br> <br>
                                <figure>
                            <p class="code">
                                &lt;h1 id=“Überschrift1“> … &lt;/h1>
                            </p>
                            <figcaption>Code 2.9 – Die Zuweisung einer id für ein h1-Element
                            </figcaption>
                            </figure>
                            Alternativ dazu kann auch ein <i class="code">div</i>-Element (
                            <i>division</i>) erstellt werden, welches als Container für andere HTML-Elemente dient und dadurch einen semantisch einheitlichen Bereich einer Website kennzeichnet. <br> <br>
                            <figure>
                                <p class="code">
                                    &lt;div id=“Bereich1“> … &lt;/div>
                                </p>
                                <figcaption>Code 2.10 - Die Zuweisung einer id für ein div-Element
                                </figcaption>
                            </figure>
                            Innerhalb des <i class="code">Anchor</i>-Elements kann dann als Wert des
                            <i class="code">href</i>-Attributs, der Name der <i class="code">division</i> oder die <i class="code">id</i> des betreffenden Elements eingetragen werden. Wird eine <i class="code">id</i> verwendet werden, muss
                            dies durch ein <i class="code">#</i> vor dem <i class="code">id</i>-Namen gekennzeichnet werden. <br> <br>
                            <figure>
                                <p class="code">
                                    &lt;a href=“#Überschrift1“> Hier gelangen Sie zu Überschrift 1 &lt;/a>
                                </p>
                                <figcaption>Code 2.11 - Das Festlegen eines Sprungs, durch eintragen einer id in einem href-Attribut</figcaption>
                            </figure>
                            </p>
                        </div>
                    </div>

                    <div class="center-paragraph">
                        <h4 id="textstruktur" class="hider"><i class="pfeil-d"></i>2.2.5 Tabellen
                        </h4>
                        <div>
                            Eine weitere Funktion der Sprache HTML ist das Erstellen von Tabellen für Webseiten. <br> <br> Für den Aufbau einer Tabelle, sind mehrere Elemente notwendig. Das Einleiten einer Tabelle geschieht durch das<i class="code">
                                &lt;table></i>-Tag. Dieses Element dient als Container für den Tabelleninhalt. <br> <br> Um Daten in die Tabelle einzufügen, wird zu Beginn, durch das <i class="code">
                                &lt;tr></i>-Tag (<i>table row</i>) eine Tabellenreihe innerhalb des <i class="code">table</i>-Elements definiert. In dieser kann dann durch das Hinzufügen von <i class="code">
                                &lt;th></i>-Elementen(<i>table head</i>), eine bestimmte Anzahl von Spalten, sowie deren Überschrift definiert werden. <br> <br> Die eigentlichen Einträge der Tabelle, werden anschließend, in einer neuen Tabellenreihe,
                            durch das <i class="code"> &lt;td></i>-Tag (
                            <i>data</i>) definiert. Dabei wird das erste <i class="code">td</i>-Element der ersten Spalte zugeordnet, das zweite Element der zweiten Spalte, und so weiter. <br> <br> Daraus ergibt sich beispielsweise folgender Aufbau:
                            <br>
                            <figure>
                                <p class="code">
                                    &lt;table> <br> &lt;tr> &lt;th> Spalte 1 &lt;/th> &lt;th> Spalte 2 &lt;/th> &lt;th>Spalte 3 &lt;/th> &lt;/tr> <br> &lt;tr> &lt;td> Daten &lt;/td> &lt;td> Daten &lt;/td> &lt;td> Daten &lt;/td> &lt;/tr> <br> &lt;tr>
                                    &lt;td> Daten &lt;/td> &lt;td> Daten &lt;/td> &lt;td> Daten &lt;/td> &lt;/tr> <br> &lt;tr> &lt;td> Daten &lt;/td> &lt;td> Daten &lt;/td> &lt;td> Daten &lt;/td> &lt;/tr> <br> &lt;/table> <br>
                                </p>
                                <figcaption>Code 2.12 – Die Struktur einer Tabelle in einem HTML-Quellcode
                                </figcaption>
                            </figure>
                            Diese Tabelle wird in einem Browser folgendermaßen dargestellt:
                            <figure>
                                <img src="./v02a-data/abb_2.8.png" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                                <figcaption>Abbildung 2.8 - Die Darstellung einer HTML-Tabelle im Browser
                                </figcaption>
                            </figure>
                            Durch die Verwendung eines <i class="code">caption</i>-Elements kann der Tabelle auch eine Überschrift zugewiesen werden. Dieses sollte über der ersten Tabellenreihe platziert werden. <br> <br> Weitere Einstellungen
                            wie z.B. einen Rand um die Zellen der Tabelle, werden über die Sprache CSS festgelegt. <br>
                        </div>
                    </div>

                </div>
            </div>


            <div class="center-paragraph">
                <h4 id="zusammenfassung-2" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                <div>
                    <p>
                        In diesem Kapitel wurden ihnen die wichtigsten Steuerelemente der Sprache HTML vorgestellt. <br> <br> Zu Beginn wurde ihnen die Grundstruktur eines HTML-Dokuments erklärt. Dabei wurde erklärt welche HTML-Elemente das Dokument
                        mindestens besitzen muss, um den vom W3C festgelegten Standard zu erfüllen, und dadurch vom Browser richtig interpretiert werden zu können. <br> <br> Anschließend wurden ihnen die wichtigsten Steuerelemente der Sprache
                        vorgestellt, welche dazu dienen den eigentlichen Inhalt der Website zu definieren und zu strukturieren. Dabei wurde ihnen vorgestellt wie Sie Textinhalte formatieren, Bilder einbinden, Referenzen setzen, sowie die Erstellung
                        von Listen und Tabellen. <br> <br>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="id" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                <div>
                    <p class="uebung">
                        <b>Aufgabe 2.1:</b> <br> Welche Elemente werden vorausgesetzt, um die Gültigkeit eines HTML-Elements zu gewährleisten zu können?
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 2.2:</b> <br> Welche zusätzliche (optionale) Angabe sollten getätigt werden, um eine korrekte Darstellung von Texten zu gewährleisten?
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 2.3:</b> <br> Beschreiben Sie anhand eines kurzen Quellcodes die Grundstruktur eines HTML-Dokuments.
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 2.4:</b> <br> Nennen Sie mindestens 2 Elemente die benötigt werden, um einen Text strukturiert auf einer Website darzustellen. Sowie 2 Elemente, die einen Text hervorheben können.
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 2.5:</b> <br> Welche Möglichkeiten gibt es Listen zu definieren, und wie unterscheiden sich diese?
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 2.5:</b> <br> Welche Möglichkeiten gibt es Listen zu definieren, und wie unterscheiden sich diese?
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 2.6:</b> <br> Wie wird ein Bild in eine Website eingebunden und welche Möglichkeiten gibt es dabei?
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 2.7:</b> <br> Wie werden Referenzen auf eine externe Website gesetzt? Und wie werden Sprünge innerhalb einer Website ermöglicht?
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 2.8:</b> <br> Welche Elemente stellt HTML zur Erstellung einer Tabelle bereit, und welche Funktion haben diese?
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h3 id="formulare">3 Formulare und Formulardaten</h3>
                <div class="einfuehrung">
                    <p>
                        Um eine strukturierte Eingabe und Verarbeitung von Daten gewährleisten zu können, werden in HTML Formulare verwendet. <br> Um diese Formulare beliebig anpassen zu können, stellt HTML eine Reihe von Formular-Elementen bereit.
                        Diese werden ihnen in diesem Kapitel vorgestellt.
                        <br> Des Weiteren werden ihnen die Elemente und Attribute vorgestellt, die verwendet werden, um die Datenübertragung der eingegebenen Daten zu konfigurieren. <br>
                        <br> Nach dem Lesen dieses Kapitels sollten die verstanden haben, wie:<br>
                    <ul>
                        <li>Sie in HTML ein Formular erstellen,</li>
                        <li>welche Elemente HTML dafür bereitstellt und</li>
                        <li>wie Sie die Datenübertragung vorkonfigurieren.</li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="formElemente" class="hider"><i class="pfeil-d"></i>3.1 HTML-Formular-Elemente
                </h4>
                <div>
                    Die Erstellung eines Formulars beginnt mit dem Deklarieren eines <i class="code">form</i>-Elements (<i>formular</i>), welches als Container für die Formular-Elemente dient. Es können aber auch die Standard-HTML-Elemente benutzt
                    werden. <br> Das wichtigste dieser Formular-Elemente ist das <i class="code">input</i>-Element. Dieses dient dazu, dem Nutzer ein Eingabe- bzw. Auswahlfeld bereitzustellen. Dazu hat es viele unterschiedliche Darstellungsformen,
                    welche eine präzise Auswahl, über die gewünschten Art der Nutzereingabe ermöglichen. <br> Durch das <i class="code">type</i>-Attribut kann diese Art von Eingabe genau festgelegt werden. Zu den unterschiedlichen Typen gehören
                    beispielsweise simple Text-Eingabefelder (<i class="code">text</i>), Ankreuzfelder (<i class="code">checkbox</i>), Datum- und Farbwähler (<i class="code">date/color</i>) sowie ein Datei-Upload-Button (<i class="code">file</i>).
                    <br> Durch weitere Werte wie <i class="code">text</i> , <i class="code">number</i> oder
                    <i class="code">email</i> kann festgelegt werden welche Eingaben möglich sind bzw. akzeptiert werden. Viele dieser Typen besitzen Attribute wie <i class="code">size</i>, <i class="code">maxlength</i> und <i class="code">min/max</i>.
                    Durch welche die Größe des Eingabefeldes, die maximale Zeichenanzahl und eine Unter-/Obergrenzen für eingetragene Werte festgelegt werden kann. <br> Durch das Attribut <i class="code">required</i> kann festgelegt werden welche
                    <i class="code">Input</i>-Element Pflichtfelder sind und welche nicht. Die Beschriftung dieser Pflichtfelder wird üblicherweise mit einem * gekennzeichnet.
                    <br> <br> Das nachfolgende Bild zeigt die Darstellung einiger <i class="code">input</i>-types, und den dazugehörigen Code. <br>
                    <figure>
                        <img src="./v02a-data/abb_3.1.png" alt="Bild konnte nicht geladen werden" width="90%" style="border:2px solid black">
                        <figcaption>Abbildung 3.1 - Die verschiedenen Input-Typen von Formularen
                        </figcaption>
                    </figure>
                    Um dem Button einen Namen zu geben wurde in der Abbildung das Attribut <i class="code">value</i> verwendet. <br> <br> Mit dem Wert <i class="code">„reset“</i> des <i class="code">type</i>-Attributs kann ein spezieller Button
                    zum Zurücksetzen der Eingaben definiert werden. Dieser setzt alle Eingaben im aktuellen <i class="code">form</i>-Element zurück.<br> <br> Der Wert <i class="code">„submit“</i> hingegen wurde als default für <i class="code">button</i>-Elemente
                    definiert, und sorgt dafür, dass die eingegebenen Daten an eine andere Seite weitergeleitet werden, wo sie ggf. weiterverarbeitet werden. <br> <br>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="datenübertragung" class="hider"><i class="pfeil-d"></i>3.2 Die Datenübertragung
                </h4>
                <div>
                    <p>
                        Da die Datenübertragung in Form von „Schlüssel-Wert-Paaren“ stattfindet (vgl. [Se19]), muss jedem <i class="code">input</i>-Element auch ein bestimmter Schlüssel, also ein Name zugewiesen werden. Dies geschieht über das
                        Attribut <i class="code">name</i>. Nur so können die übertragenen Daten, auf der Empfängerseite richtig verstanden werden. Oft wird zu Verarbeitung der Daten, ein serverseitiges Skript verwendet, welcher die Daten beispielsweise
                        in einer Datenbank abspeichert. <br> <br> Um festzulegen wohin genau die Daten übertragen werden sollen, wird dem Attribut
                        <i class="code">action</i>, innerhalb des form-Elements, eine URL / ein Dateipfad zugewiesen. Ebenfalls wird über das Attribut <i class="code">method</i> die entsprechende HTTP-Methode angegeben, mit der die Daten übertragen
                        werden sollen. Üblicherweise wird hier <i class="code">„post“</i> verwendet, da die Methode <i class="code">„get“</i> die übergebenen Daten in der URL darstellt, was für sensible Daten nicht geschehen sollte. (vgl. [Se19])
                        <br> <br> Das nachfolgende Bild zeigt den Quellcode eines simples Kontaktformulars, welches die Werte von „Name“ und „Nachricht“ mittels HTTP-POST Methode an die Seite „formularVerarbeitung.php“ weiterleitet. Sowie dessen
                        Darstellung in einem Browser. <br>
                        <figure>
                            <img src="./v02a-data/abb_3.2.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                            <figcaption>Abbildung 3.2 – Ein Kontaktformular mit Konfiguration zur Datenübertragung
                            </figcaption>
                        </figure>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="overflow" class="hider"><i class="pfeil-d"></i>3.3 Weitere nützliche Formular-Elemente
                </h4>
                <div>
                    <p>
                        Um das Eingabefeld zu erweitern wurde in der Abbildung 3.2 ein <i class="code">textarea</i>-Element verwendet, dieses verhält sich wie ein <i class="code">input</i>-Element vom Typ <i class="code">„text“</i>, stellt aber
                        eine größere Eingabefläche zur Verfügung. Die Maße können über die Attribute <i class="code">„rows“</i> (Reihen) und <i class="code">„cols“</i>s (Spalten) festgelegt werden. <br> <br> Mittels <i class="code">select</i>-
                        und dazugehörigen <i class="code">option</i>-Elementen kann eine Liste von Auswahlmöglichkeiten für ein Eingabefeld bereitgestellt werden. (siehe Seite 19, Abb. 3.3, Feld: „Geschlecht“) <br> <br> Für die Beschriftung eines
                        Input-Feldes kann auch das Element <i class="code">label</i> verwendet werden. Dazu wird der jeweilige Beschreibungstext, als Inhalt in das <i class="code">label</i>-Element geschrieben. Dem Attribut for muss als Wert,
                        der Name des <i class="code">input</i>-Elements auf welches es sich bezieht, zugewiesen werden. Dies stellt eine logische Verknüpfung der Elemente her, welche vor allem für die weitere Bearbeitung des Formulars, durch CSS/JavaScript
                        oder PHP von Nutzen ist. An der Darstellung ändert sich allerdings nichts. <br> <br> Ein Input-Feld mit einem zugehörigen Label hat die folgende Form: <br>
                        <figure>
                    <p class="code" style="border:2px solid black;">
                        &lt;label for=“Namensfeld“> Geben Sie ihren Namen ein: &lt;/label> &lt;input type=“text“ name=“Namensfeld“>
                    </p>
                    <figcaption>Code 3.1 - Die Deklaration eines label-Elements, welches mit einem input-Feld zusammenhängt</figcaption>
                    </figure>
                    Des Weiteren ist es durch das Attribut <i class="code">value</i> möglich, einem input-Element einen vordefinierten <i>default</i>-Wert zu vergeben, welcher verwendet wird, falls der User das Formular abschickt, ohne das
                    Feld auszufüllen. <br> <br>
                    <figure>
                        <p class="code" style="border:2px solid black;">
                            &lt;input type=“text“ name=“Vorname“ value=“Michael“>
                        </p>
                        <figcaption>Code 3.2 - Das Festlegen eines default-Wertes für ein input-Element
                        </figcaption>
                    </figure>
                    Soll ein input-Element nicht verändert werden können, kann dies durch das Attribut <i class="code">readonly</i> festgelegt werden. <br> <br> In dem nachfolgenden Bild sieht man einen Quellcode eines Nutzer-Registrierung-Formulars,
                    welches einige der bisher erwähnten Elemente beinhaltet. Sowie dessen Darstellung in einem Browser: <br>
                    <figure>
                        <img src="./v02a-data/abb_3.3.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                        <figcaption>Abbildung 3.3 – Der Quellcode eines Registrierung-Formulars, sowie dessen Darstellung in einem Browser.</figcaption>
                    </figure>
                    Über das <i class="code">button</i>-Element können auch benutzerdefinierte Buttons erstellt werden. Um diesen aber eine Funktion zuordnen zu können, muss die Skriptsprache JavaScript verwendet werden. Der Funktionsaufruf
                    geschieht über das Attribut <i class="code">onclick</i>. <br>
                    <figure>
                        <p class="code" style="border:2px solid black;">
                            &lt;button value=“Button-Name“ onclick=“JavaScript-Funktion()“>
                        </p>
                        <figcaption>Code 3.3 – Die Definition eines Buttons mit benutzerdefinierter JavaScript-Funktion
                        </figcaption>
                    </figure>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="zusammenfassung-3" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                <p> In diesem Kapitel wurde ihnen vorgestellt wie mithilfe von HTML, Formulare erstellt werden können. <br> Dazu wurden ihnen die wichtigsten Formular-Elemente vorgestellt, mit denen Formulare individuell angepasst werden können, und
                    Eingabefelder auf die gewünschten Eingabemöglichkeiten reduziert werden können. <br> Des Weiteren wurde ihnen erklärt wie Sie die Formulare so konfigurieren, dass die eingegebenen Daten auch korrekt übertragen werden können.
                    <br>
                </p>
            </div>

            <div class="center-paragraph">
                <h4 id="uebungen-3" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                <div>
                    <p class="uebung">
                        <b>Aufgabe 3.1:</b><br> Wie wird ein Formular definiert, und wie werden Eingabefelder innerhalb eines Formulars definiert? Nennen Sie drei Beispiele für den Typ eines Eingabefeldes.
                        <br>
                    </p>

                    <p class="uebung">
                        <b>Aufgabe 3.2: </b><br> Welche Attribute werden in Formularen vorausgesetzt, um eine Datenübertragung zu ermöglichen, und was bewirken diese?
                    </p>

                </div>
            </div>

            <div class="center-paragraph">
                <h3 id="dom">4 Das Dokument-Objekt-Modell</h3>
                <div class="einfuehrung">
                    In diesem Kapitel wird ihnen das Dokument-Objekt-Modell (kurz DOM) vorgestellt. <br>
                    <br> Zu Beginn wird ihnen die Darstellung, die Struktur und der Aufbau des Modells erläutert. <br> <br> Anschließend wird ihnen die eigentliche Funktion des Modells beschrieben, und verdeutlicht was durch die Erstellung eines
                    DOM`s ermöglicht wird. <br> <br> Nach dem durchlesen dieses Kapitels sollten Sie verstanden haben: <br>
                    <ul>
                        <li>Wie das DOM aufgebaut wird und</li>
                        <li>welchen Nutzen es im Bereich Webentwicklung hat.</li>
                    </ul>
                </div>
            </div>
            </p>



            <div class="center-paragraph">
                <h4 id="aufbaudom" class="hider"><i class="pfeil-d"></i>4.1 Der Aufbau eines DOM´s</h4>
                <div>
                    Durch die Eigenschaft der Sprache HTML, dass alle Elemente ineinander verschachtelt sind, lässt sich daraus eine Struktur abbilden, die sich als Dokument-Objekt-Modell bezeichnet. <br> <br> Dieses Modell ist in mehrere Objekte
                    unterteilt, welche die einzelnen Elemente des HTML-Quellcodes repräsentieren und miteinander in einer logischen Beziehung stehen können. <br> <br> Ein Objekt kann dabei mehrere Kinderobjekte besitzen. Dies dient zur Repräsentation
                    einer „Container“-Beziehung wie z.B. die einer Liste zu ihren Listeneinträge. <br>
                    <br> Auch das ganze Dokument selbst wird dabei als Document-Objekt repräsentiert, und bildet den Ausgangspunkt der gesamten Hierarchie. Von ihm aus ist jedes andere Objekt des Baumes erreichbar. <br> <br> Das Dokument-Objekt
                    besitzt als Kind ein Objekt, welches das <i class="code">
                        &lt;html></i>-Wurzelelements des Dokuments wiederspiegelt. Dieses wiederum besitzt das <i class="code"> &lt;head></i>- und <i class="code">
                        &lt;body></i>-Element als Kinder, und so weiter bis das alle Elemente des Dokuments abgebildet wurden. <br> <br> Falls ein Element bestimmte Attribute besitzt, werden diese ebenfalls in dem Modell durch eine logische Beziehung
                    zu einem Attribut-Objekt dargestellt. <br> <br> Nachdem alle Elemente, ihre Attribute und die logischen Beziehungen in das Modell übertragen wurden, ergibt sich daraus eine Baumstruktur:<br>
                    <figure>
                        <img src="./v02a-data/abb_4.1.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                        <figcaption>Abbildung 4.1 - Darstellung eines HTML-Dokuments in Baumstruktur; (vgl. [PH04, Kapitel 2] )</figcaption>
                    </figure>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="nutzendom" class="hider"><i class="pfeil-d"></i>4.2 Der Nutzen eines DOM`s</h4>
                <p> <q>The Document Object Model (DOM) is an application programming interface (API) for
                        valid HTML and well-formed XML documents. It defines the logical structure of
                        documents and the way a document is accessed and manipulated.</q><br> [PH04, Kapitel 1] Wie das Zitat bereits ausdrückt, handelt es sich bei dem DOM nicht nur um eine Abbildung der logischen Struktur eines Dokuments, sondern
                    auch um eine Programmierschnittstelle. Diese ermöglicht einen externen Zugriff, sowie die externe Manipulation der HTML-Elemente durch eine Skript- oder Programmiersprache. <br> <br> Dies bildet die Grundlage, die benötigt
                    wird, um eine Website dynamisch gestalten zu können.
                    <br> <br> Hauptsächlich wird in diesem Fall JavaScript verwendet. Aber das DOM wurde so entworfen, dass die Realisierung auch durch andere Sprachen wie z.B. Python, C++ oder PHP möglich ist. (vgl. [W3C04]) <br> <br> Wird ein
                    HTML-Dokument durch einen Browser geladen, so erstellt er ein solches Modell auf Basis dieses Dokuments und speichert das Modell in dem Arbeitsspeicher des Nutzers. (vgl. [Se19]) <br> <br> Auf dieser Grundlage kann z.B. ein
                    Skript in JavaScript erstellt werden, welcher in die HTML-Datei eingebunden wird. Innerhalb dieses Skripts kann dann durch die bereitgestellten Methoden der Schnittstelle, auf jedes HTML-Elemente sowie deren Attribute zugegriffen
                    werden.<br> <br> Diese können dann durch die Skript-/Programmiersprache beliebig verändert, hinzugefügt oder gelöscht werden. <br> <br> Dadurch wird ermöglicht dynamische Funktionen auf der Website bereitzustellen, welche beispielsweise
                    die visuelle Darstellung einiger Elemente verändern oder ein Ergebnis einer Berechnung liefern. <br> <br> Im Fall von JavaScript stellt das DOM-API einige Methoden bereit, um gezielt auf Elemente bestimmter Klassen oder id’s
                    zugreifen zu können. Dadurch sollte an dieser Stelle nochmal die Bedeutung dieser Attribute verdeutlicht werden. <br> <br>
                </p>
            </div>

            <div class="center-paragraph">
                <h4 id="zusammenfassung-4" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                <p>
                    In dem ersten Unterkapitel wurde ihnen beschrieben woraus ein Dokument-Object-Modell besteht und wie es aus einem HTML-Dokument abgeleitet und aufgebaut wird. <br> <br> Danach wurde ihnen die Funktionsweise der DOM-Programmierschnittstelle
                    erklärt, und verdeutlicht wie dadurch die Erstellung einer dynamischen Website ermöglicht wird.
                    <br> <br>
                </p>
            </div>

            <div class="center-paragraph">
                <h4 id="uebungen-4" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                <div>
                    <p class="uebung">
                        <b>Aufgabe 4.1:</b> <br> Woraus ist ein DOM aufgebaut, was wird dadurch repräsentiert und wie wird das Modell dargestellt?
                    </p>
                    <p class="uebung">
                        <b>Aufgabe 4.2:</b> <br> Welchen Nutzen hat das DOM, und was wird dadurch ermöglicht?
                    </p>
                    <p class="uebung">
                        <b>Aufgabe 4.3:</b> <br> Was sollte verwendet werden, um Zugriffe auf das DOM zu erleichtern?
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h3 id="html5">5 Neuerungen in HTML5</h3>
                <div class="einfuehrung">
                    <p>
                        In diesem Kapitel werden ihnen die wichtigsten Neuerungen der Sprache HTML vorgestellt, die durch die Version HTML5 erschienen sind. <br> <br> Zu Beginn werden ihnen die neuen Elemente vorgestellt, die eingeführt wurden,
                        um die Möglichkeiten der Seitenstrukturierung zu erweitern. <br> <br> Anschließend werden ihnen die neue Multimedia-Elemente vorgestellt, welche es erlauben Grafiken zu erzeugen und Multimedia-Dateien in eine Website einzubinden.
                        <br> <br> Nach dem durchlesen dieses Kapitels sollten Sie, <br>
                    <ul>
                        <li>die neuen Strukturierungselemente kennengelernt haben und</li>
                        <li>Multimedia-Elemente definieren und einbinden können. </li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="position" class="hider"><i class="pfeil-d"></i>5.1 Neue Möglichkeiten der Seitenstrukturierung
                </h4>
                <div>
                    Um die Möglichkeiten der Seitenstrukturierung zu verbessern und zu modernisieren, wurden in der Version HTML5 eine Reihe neuer Elemente eingeführt. <br> <br> Vor HTML5 war die einzige Möglichkeit der Unterteilung des Seiteninhalts
                    in semantische Bereiche, die Verwendung von <i class="code"> &lt;div></i>-Elemente und der Auszeichnung dieser durch entsprechende <i class="code">id</i>- oder <i class="code">class</i>-Attribute. Da dies oft sehr unübersichtlich
                    wurde, wurde in HTML5 ein neues Prinzip der Seitenstrukturierung eingeführt. <br> <br> Durch das <i class="code">header</i>-Element kann nun, innerhalb des <i class="code">body</i>’s ein Seitenkopf definiert werden. Innerhalb
                    diesem werden dann gewöhnlich die Elemente definiert, die konstant auf jeder Seite der Homepage, im oberen Bereich der Website zu finden sind, wie beispielsweise das Logo oder die Navigationselemente. Um den Navigationsbereich
                    auszuzeichnen kann dazu noch das <i class="code">nav</i>-Element verwendet werden. <br> <br> Das Gegenstück dazu ist das <i class="code">footer</i>-Element, welches Elemente im unteren Bereich der Website definiert, wie beispielsweise
                    die Kontaktdaten einer Firma und Links zu einem Impressum oder zu der Datenschutzerklärung. <br> <br> Um den Bereich des hauptsächlichen Seiteninhalts zu kennzeichnen, kann nun das <i class="code">main</i>-Element verwendet
                    werden. Innerhalb dieses Elements können weitere Bereiche durch die neuen <i class="code">article</i>- und <i class="code">section</i>-Elemente gekennzeichnet werden. <br> <br> Das <i class="code">article</i>-Element sollte
                    verwendet werden, wenn der Inhalt auf der Website für sich alleinsteht, wie ein Blog-Post oder Nachrichtenartikel. Die <i class="code">section</i>-Elemente hingegen, sollten beispielsweise die einzelnen Kapitel eines Artikels
                    auszeichnen. (vgl. [Se19, Kapitel 2] ) <br> <br> Um einen Bereich zu kennzeichnen, der seitlich auf einer Website zu finden ist, kann nun das <i class="code">aside</i>-Element verwendet werden. Dies übernimmt allerdings nicht
                    die Positionierung der Elemente, sondern zeichnet nur diese Gruppe von Elementen aus, um Sie beispielsweise später mit CSS platzieren zu können. <br>
                    <br>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="float-clear" class="hider"><i class="pfeil-d"></i>5.2 Multimedia-Elemente</h4>
                <div>
                    <p>
                    <h4>Erzeugung von Grafiken</h4>
                    Mittels <i class="code">svg</i>-Elements wurde eine Möglichkeit eingeführt, direkt im HTML-Quell eine <i>Scalable-Vector-Graphic</i> zu erstellen. Innerhalb dieses Elements kann durch weitere Elemente wie beispielsweise
                    <i class="code">circle</i> oder <i class="code">rect</i> (<i>rectangle</i>) eine Grafik erstellt werden. Dazu stehen noch mehrere Attribute zur Verfügung, mit denen Größe und Farbe angepasst werden können. <br> <br> Das
                    <i class="code">canvas</i>-Element markiert einen rechteckigen Bereich auf einer Website. Dieser kann benutzt werden, um mittels JavaScript eine Zeichnung in diesem Bereich erscheinen zu lassen. <br> <br> Hier ein Beispiel
                    einer mittels <i class="code">svg</i>-Element erzeugten Grafik, und der entsprechende Quellcode: <br>
                    </p>
                    <figure>
                        <img src="./v02a-data/abb_5.1.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                        <figcaption>Abbildung 5.1 - Eine mittels SVG-Element erzeugte Grafik und der entsprechende Quellcode</figcaption>
                    </figure> <br>

                    <h4>Einbinden von Audio-Dateien</h4>
                    <p>
                        Mittels <i class="code">audio</i>-Element können nun auch Audio-Dateien in eine Website eingebunden werden. Dabei werdend die Formate MP3, WAV und OGG unterstützt.(vgl. [W3S19, Audio] ) <br> <br> Das <i class="code">audio</i>-Element
                        selbst dient nur als Container für <i class="code">source</i>-Elemente, welche die Referenzen auf die Audio-Dateien enthalten. Diese wird durch das <i class="code">src</i>-Attribut, in Form einer URL oder eines relativen
                        Pfades gesetzt. Dazu muss noch durch das
                        <i class="code">type</i>-Attribute, der jeweilige Typ der Audiodatei gekennzeichnet werden. Dabei steht <i class="code">„audio/mpeg“</i> für mp3-Dateien, <i class="code">„audio/ogg“</i> für OGG-Dateien und <i class="code">„audio/wav“</i>                                für WAV-Dateien. <br> <br> Durch das deklarieren des <i class="code">controls</i>-Attributes in dem Tag des
                        <i class="code">audio</i>-Elements, wird ein Start-, ein Stopp- und ein Lautstärkeregelung-Button hinzugefügt. Diesem Attribut muss kein Wert zugewiesen werden. <br>
                        <figure>
                            <img src="./v02a-data/abb_5.2.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                            <figcaption>Abbildung 5.2 - Der Code und die Darstellung eines eingebundenen Audio-Elements
                            </figcaption>
                        </figure> <br>
                    </p>

                    <h4>Einbinden von Videos</h4>
                    <p>
                        Durch ein <i class="code">video</i>-Element können nun auch Video-Dateien in eine Website eingebunden wurden. Dabei werden die Formate MP4, WebM und Ogg unterstützt. (vgl. [W3S19, Video] ) <br> <br> Genau wie bei dem audio-Element
                        wird durch das video-Element ein Container für
                        <i class="code">source</i>-Elemente definiert. Auch die Referenzierung der Datei erfolgt nach demselben Prinzip, jedoch muss bei dem <i class="code">type</i>-Attribut auch ein entsprechendes Videoformat angegeben werden.
                        (<i class="code">video/mp4, video/webm, video/ogg</i>). <br> <br> Wie auch bei dem audio-Element stellt das Attribut <i class="code">controls</i> einen Videoplayer zur Verfügung. Dessen Größe kann über die Attribute
                        <i
                                class="code">width</i> und <i class="code">height</i> angepasst werden. <br>
                        <br> Hier ein Beispiel dazu:<br>
                        <figure>
                            <img src="./v02a-data/abb_5.3.PNG" alt="Bild konnte nicht geladen werden" width="85%" style="border:2px solid black">
                            <figcaption>Abbildung 5.3 - Ein durch ein video-Element erzeugter Videoplayer, für die Datei „video.mp4“</figcaption>
                        </figure> <br>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="zusammenfassung-5" class="hider"><i class="pfeil-d"></i>Zusammenfassung</h4>
                <p>
                    In diesem Kapitel wurden ihnen zu Beginn einige neue HTML5-Elemente vorgestellt, welche es ermöglichen bestimmte Elemente eines Bereiches zu gruppieren und dadurch die Struktur einer Website noch präziser festzulegen. <br>                            <br> Anschließend wurden ihnen noch die Multimedia-Elemente vorgestellt, die es ermöglichen Video- und Audio-Dateien in eine Website einzubinden und SVG-Dateien zu erzeugen. <br>
                </p>
            </div>

            <div class="center-paragraph">
                <h4 id="uebungen-5" class="hider"><i class="pfeil-d"></i>Übungen</h4>
                <div>
                    <p class="uebung">
                        <b>Aufgabe 5.1:</b> <br> Wozu wird das header-Element, und wozu das footer-Element verwendet?
                    </p>
                    <p class="uebung">
                        <b>Aufgabe 5.2:</b> <br> Definieren sie ein Element das die Beispieldatei „video.mp4“ einbindet, und einen Video-Player der Größe 200x200 bereitstellt.
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="loesungen" class="hider"><i class="pfeil-d"></i>A Lösungen</h4>
                <div>
                    <p class="aufgabenbox">
                        <b>Aufgabe 1.1:</b> <br> Die Sprache HTML wird benutzt, um die grundlegende semantische Struktur einer Website festzulegen.
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 1.2:</b> <br> Da HTML der Standard der Webentwicklung geworden ist, basiert heutzutage nahezu jede Website auf einem HTML-Quellcode. Des Weiteren ist heutzutage nahezu jeder Browser darauf ausgelegt HTML-Quellcode
                        zu Interpretieren.
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 1.3:</b> <br> Es ist nicht möglich, weitgehende Einstellungen an der visuellen Darstellung der Website festzulegen, oder dynamische Funktionen einzubauen.
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 1.4:</b> <br> HTML-Elemente sind Bestandteil eines HTML-Quellcodes, welche einen bestimmten Teil einer Website repräsentiert. Sie sind nötig um den HTML-Quellcode sowie die daraus resultierende Website strukturieren
                        zu können, und dem Browser Interpretationsanweisungen zu geben. <br> <br> &lt;Tag-Name> Inhalt des Elements &lt;/Tag-Name> <br> <br> Ein HTML-Element ist durch ein Start- und ein End-Tag ausgezeichnet, und zwischen diesen
                        Tags befindet sich der Inhalt des Elements.
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 2.1:</b> <br> Die Dokumenttypdeklaration - &lt;!DOCTYPE HTML> <br> Der HTML-Container - &lt;html> <br> Die Unterteilung des HTML-Containers in &lt;head> (Metainformationen) und &lt;body> (Inhalt). <br> Der Titel
                        der Website im head - &lt;title>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 2.2:</b> <br> Durch die Angabe des Zeichensatzes: &lt;meta charset=“UTF-8“>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 2.3:</b> <br> &lt;!DOCTYPE html> <br> &lt;html> <br> &lt;head> <br> &lt;title> &lt;/title> <br> &lt;/head> <br> &lt;body> &lt;/body> <br> &lt;/html> <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 2.4:</b> <br> Die Elemente &lt;h1>-&lt;h6> und &lt;p>, werden benötigt, um die einzelnen Überschriften und Paragrafen auszuzeichnen. <br> Zur Hervorhebung von Texten dienen die Elemente &lt;em> &lt;strong> und
                        &lt;small>.
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 2.5:</b> <br> Listen können durch &lt;ul> , &lt;ol> oder &lt;dl> definiert werden. Der Unterschied zwischen ul und ol ist, dass ol eine Aufzählung enthält und ul nicht. Der Aufbau dieser zwei Listen ist aber
                        gleich. <br> Die dl hingegen unterscheidet sich im Aufbau zu den anderen Beiden und enthält zu jedem Listen-Term auch noch eine Term-Beschreibung. <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 2.6:</b> <br> &lt;img src="bild.jpg" alt=“Alternativtext“> <br> Dem Attribut src kann ein relativer Pfad zu der Datei, oder eine URL zugewiesen werden. <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 2.7:</b> <br> Referenzen werden durch das anchor-Element gesetzt: <br> &lt;a href=“https://www.eine-website.de/einDokument.html“ … >Ich bin ein Link&lt;/a> <br> Für einen Sprung muss ein Element der Website durch
                        eine id/div gekennzeichnet werden, und anschließend durch ein # angeführt, in das href-Attribut eingetragen werden.
                        <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 2.8:</b> <br> &lt;table> : Leitete eine Tabelle ein, Container für weitere Tabellen-Elemente
                        <br> &lt;tr> : Definiert eine neue Tabellenreihe. <br> &lt;th> : Definiert eine neue Tabellenspalte, und deren Überschrift. <br> &lt;td> : Definiert die eigentlichen Tabelleneinträge. <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 3.1:</b> <br> Formulare werden durch &lt;form> definiert, und Eingabefelder durch &lt;input>.
                        <br> Beispiele: text, date, email, number, color, submit, reset etc. <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 3.2:</b> <br> Da die Datenübertragung in Form von „Schlüssel-Wert-Paaren“ stattfindet, muss jedem input-Element, durch das Attribut name auch ein bestimmter Schlüssel zugewiesen werden. <br> Des Weiteren muss
                        dem form-Element mit den Attributen action und method, das Ziel der Datenübertragung, sowie deren Methode genannt werden. <br> <br> &lt;form action="formularVerarbeitung.php" method="post"> <br> &lt;input type="text" name="Name">
                        <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 4.1:</b> <br> Ein DOM wird das aus den Elementen, den Attributen und den Beziehungen zwischen den einzelnen Elementen abgeleitet und aufgebaut. <br> Es wird durch eine Baumstruktur repräsentiert und stellt die
                        logische Gesamtstruktur eines HTML-Dokuments dar. <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 4.2:</b> <br> Das DOM definiert eine Programmierschnittstelle um Zugriffe und Manipulation, durch externe Skript- oder Programmiersprachen, zu ermöglichen.<br> Dadurch kann der Inhalt einer Website dynamisch
                        angepasst werden. <br>
                    </p>

                    <p class="aufgabenbox">
                        <b>Aufgabe 4.3:</b> <br> Die Elemente sollten durch bestimmte Klassen oder id’s ausgezeichnet werden, da Methoden bereitgestellt werden die gezielt darauf zugreifen können. <br>
                    </p>

                    <p class="aufgabenbox"></p>
                    <b>Aufgabe 5.1:</b> <br> Das header-Element wird üblicherweise verwendet, um Elemente zu definieren die konstant im oberen Bereich der Website platziert werden. Das footer-Element für Elemente im unteren Bereich.
                    </p>

                    <p class="aufgabenbox"></p>
                    <b>Aufgabe 5.2:</b> <br> &lt;video width="200" height="200" controls><br> &lt;source src="video.mp4" type="video/mp4"><br> &lt;/video>
                    <br>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="literatur" class="hider"><i class="pfeil-d"></i>B Literaturverzeichnis</h4>
                <div>
                    <p>
                        <b>Kapitel 1:</b> <br> [RL] Dave Raggett, Jenny Lam, Ian Alexander and Michael Kmiec: „Ragett on HTML4: Chapter 2: A history of HTML“; Addison Wesley Longman; 1998; ISBN: 0-201-17805-2; &lt;https://www.w3.org/People/Raggett/book4/ch02.html>
                        ( 12.11.2019 ). <br> [Be19] World Wide Web Consortium: Tim Berners Lee: Longer Biography; 2019; &lt;https://www.w3.org/People/Berners-Lee/Longer.html> (12.11.2019). <br> [Se18] SELFHTML: Wiki: SGML; 2018; &lt;https://wiki.selfhtml.org/wiki/SGML>
                        (13.11.2019). <br> <br>

                        <b>Kapitel 2:</b> <br> [MK07] Chuck Musciano, Bill Kennedy: „HTML & XHTML: das umfassende Handbuch“; O'Reilly Germany; 2007; ISBN: 978-3897214941 <br> [Sc08] Ralph G. Schulz: „HTML und CSS Praxisbuch: Einführung in strukturiertes
                        Webdesign“; mitp Verlag; 2008; ISBN: 978-3826617751 <br> [Pr09] Christoph Prevezanos : „Jetzt lerne ich HTML; Pearson Deutschland GmbH“; 2009; ISBN: 978-3827244383 <br> [Se18] SELFHTML: Wiki: HTML/Tutorials/HTML5/Grundgerüst;
                        2018; &lt;https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Grundgerüst> (15.11.2019). <br> [W3S19] W3Schools: HTML Basic Examples; 2019; &lt;https://www.w3schools.com/html/html_basic.asp> (15.11.2019). <br> [WH19] WHATWG:
                        HTML Living Standard: The elements of HTML; 2019; &lt;https://html.spec.whatwg.org/multipage/semantics.html#semantics> (15.11.2019).
                        <br> [W3S19, Dt] W3Schools: HTML &lt;!DOCTYPE> Declaration; 2019; &lt;https://www.w3schools.com/tags/tag_doctype.asp> (15.11.2019). <br> [Se18] SELFHTML: Wiki: HTML/Tutorials/Einstieg/Kapitel2; 2019; &lt;https://wiki.selfhtml.org/wiki/HTML/Tutorials/Einstieg/Kapitel2>
                        (17.11.2019). <br> [W3S19] W3Schools: HTML Lists; 2019; &lt;https://www.w3schools.com/html/html_lists.asp> (17.11.2019). <br> [W3S19] W3Schools: HTML &lt;img> Tag; 2019; &lt;https://www.w3schools.com/tags/tag_img.asp> (17.11.2019).
                        <br> [W3S19] W3Schools: HTML Images; 2019; &lt;https://www.w3schools.com/html/html_images.asp> (17.11.2019). <br> [W3S19] W3Schools: HTML File Paths; 2019; &lt;https://www.w3schools.com/html/html_filepaths.asp> (17.11.2019).<br>                                [Se19] SELFHTML: Wiki: HTML/Multimedia und Grafiken/Grafiken; 2019; &lt;https://wiki.selfhtml.org/wiki/HTML/Multimedia_und_Grafiken/Grafiken> (17.11.2019).
                        <br> [W3S19] W3Schools: HTML Links; 2019; &lt;https://www.w3schools.com/html/html_links.asp> (18.11.2019).<br> [W3D] W3docs: HTML: How to Create an Anchor Link to Jump to a Specific Part of a Page; 2019; &lt;https://www.w3docs.com/snippets/html/how-to-create-an-anchor-link-to-jump-to-a-specific-part-of-a-page.html>
                        (18.11.2019).
                        <br> [WH19] WHATWG: HTML Living Standard: The a element; 2019; &lt;https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-a-element> (18.11.2019).
                        <br> [W3S19] W3Schools: HTML &lt;div> Tag; 2019; &lt;https://www.w3schools.com/tags/tag_div.asp> (18.11.2019).<br> [W3S19] W3Schools: HTML Tables; 2019; &lt;https://www.w3schools.com/html/html_tables.asp> (19.11.2019).<br>                                [Se19] SELFHTML: Wiki: HTML/Tabellen/Aufbau einer Tabelle; 2019; &lt;https://wiki.selfhtml.org/wiki/HTML/Tabellen/Aufbau_einer_Tabelle> (19.11.2019)
                        <br> Quelle des eingebundenen Bildes in Abb. 2.5 und Abb. 2.6: <br> [Re19] Pixabay: Megan_Rexazin: &lt;https://pixabay.com/de/vectors/speicher-online-e-commerce-4156934/> ( 17.11.2019 ) <br> <br>

                        <b>Kapitel 3:</b> <br> [W3S19] W3Schools: HTML Forms; 2019; &lt;https://www.w3schools.com/html/html_forms.asp> (20.11.2019). <br> [W3S19] W3Schools: HTML Form Elements; 2019; &lt;https://www.w3schools.com/html/html_form_elements.asp>
                        (20.11.2019). <br> [W3S19] W3Schools: HTML Input Attributes; 2019; &lt;https://www.w3schools.com/html/html_form_attributes.asp> (20.11.2019). <br> [WH19] WHATWG: HTML Living Standard: The input element; 2019; &lt;https://html.spec.whatwg.org/multipage/input.html#the-input-element>
                        (20.11.2019)
                        <br> [Se19] SELFHTML: Wiki: HTML/Tutorials/Formulare/Was ist ein Webformular?: Formular-Versand; 2019 &lt;https://wiki.selfhtml.org/wiki/HTML/Tutorials/Formulare/Was_ist_ein_Webformular%3F#Formular-Versand> (20.11.2019).
                        <br> <br>


                        <b>Kapitel 4:</b> <br> [PH04] Philippe Le Hégaret, W3C : What is the Document Object Model?, &lt;https://www.w3.org/TR/DOM-Level-3-Core/introduction.html> (23.11.2019). <br> [W3S19] W3Schools: What is HTML DOM?; 2019; &lt;https://www.w3schools.com/whatis/whatis_htmldom.asp>
                        (22.11.2019). <br> [Se19] SELFHTML: Wiki: DOM; 2019; &lt;https://wiki.selfhtml.org/wiki/DOM> (22.11.2019). <br> [W3C04] Philippe Le Hégaret, W3C: Document Object Model (DOM) Bindings; 2019; &lt;https://www.w3.org/DOM/Bindings>
                        (22.11.2019) <br><br>


                        <b>Kapitel 5:</b> <br> [W3S19] W3Schools: HTML5 Introduction; 2019; &lt;https://www.w3schools.com/html/html5_intro.asp> (23.11.2019). <br> [Se19] SELFHTML: Wiki: HTML/Tutorials/HTML5/Seitenstrukturierung; 2019; &lt;https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Seitenstrukturierung>
                        (23.11.2019). <br> [W3S19] W3Schools: HTML5 Semantic Elements; 2019; &lt;https://www.w3schools.com/html/html5_semantic_elements.asp> (23.11.2019).
                        <br> [W3S19, SVG] W3Schools: HTML5 SVG; 2019; &lt;https://www.w3schools.com/html/html5_svg.asp> (24.11.2019). <br> [W3S19, Canvas] W3Schools: HTML5 Canvas; 2019; &lt;https://www.w3schools.com/html/html5_canvas.asp> (24.11.2019).
                        <br> [W3S19, Audio] W3Schools: HTML5 Audio; 2019; &lt;https://www.w3schools.com/html/html5_audio.asp> (24.11.2019). <br> [W3S19, Video] W3Schools: HTML5 Video; 2019; &lt;https://www.w3schools.com/html/html5_video.asp> (24.11.2019).
                        <br>
                        <br>
                    </p>
                </div>
            </div>

            <div class="center-paragraph">
                <h4 id="abbildungen" class="hider"><i class="pfeil-d"></i>C Abbildungsverzeichnis</h4>
                <p>
                    Abb. 2.1: Die HTML Grundstruktur <br> Abb. 2.2: Textstrukturierung in HTML <br> Abb. 2.3: Eine ungeordnete Liste mit style-Attribut <br> Abb. 2.4: Eine geordnete Liste mit type- und start-Attribut <br> Abb. 2.5: Der Quellcode
                    einer Definitionsliste und ihre Darstellung <br> Abb. 2.6: Einbindung eines Bildes mit einem Beschreibungstext und Maßangaben <br> Abb. 2.7: Referenzierung des Dokuments „main.html“, durch ein anchor um das Bild
                    <br> Abb. 2.8: Die Darstellung einer HTML-Tabelle im Browser <br> Abb. 3.1: Die verschiedenen Input-Typen von Formularen <br> Abb. 3.2: Ein Kontaktformular mit Konfiguration zur Datenübertragung <br> Abb. 3.3: Ein Registrierungs-Formular
                    dessen Quellcode <br> Abb. 4.1: Darstellung eines HTML-Dokuments in Baumstruktur <br> Abb. 5.1: Eine mittels SVG-Element erzeugte Grafik und der entsprechende Quellcode
                    <br> Abb. 5.2: Der Code und die Darstellung eines eingebundenen Audio-Elements <br> Abb. 5.3: Ein durch ein video-Element erzeugter Videoplayer, für die Datei „video.mp4“ <br>

                </p>
            </div>

            <div class="center-paragraph">
                <h4 id="codevz" class="hider"><i class="pfeil-d"></i>D Codeverzeichnis</h4>
                <p>
                    Code 7.1 - Der Aufbau eines HTML-Elements<br> Code 8.1 – Dokumenttypdeklaration in HTML5 <br> Code 2.2 - Dokumenttypdeklaration in HTML4.01 <br> Code 2.9 - Das html-Element mit einem lang-Attribut <br> Code 2.10 – Ein title-Element
                    innerhalb des head-Elements <br> Code 2 11 - Angabe des Zeichensatzes mit dem charset-Attribut innerhalb eines meta-Elements <br> Code 2.12 - Angabe des Autors und von Keywords mittels content- und name-Attribut.
                    <br> Code 2.7 – Die möglichen Pfadangaben durch ein src-Attribut des img-Elements. <br> Code 2.8 – Die möglichen Pfadangaben beim Setzen einer Referenz durch das href-Attribut <br> Code 2.9 – Die Zuweisung einer id für ein
                    h1-Element <br> Code 2.10 - Die Zuweisung einer id für ein div-Element <br> Code 2.11 - Das Festlegen eines Sprungs, durch eintragen einer id in einem href-Attribut <br> Code 2.12 – Die Struktur einer Tabelle in einem HTML-Quellcode
                    <br> Code 3.1 - Die Deklaration eines label-Elements, welches mit einem input-Feld zusammenhängt <br> Code 3.2 - Das Festlegen eines default-Wertes für ein input-Element <br> Code 3.3 – Die Definition eines Buttons mit benutzerdefinierter
                    JavaScript-Funktion
                    <br>

                </p>
            </div>
        </div>
    </div>



<?php
include('includes/footer.php');
?>