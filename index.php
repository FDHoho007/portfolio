<!DOCTYPE html>
<html lang="de">

<head>

    <title>FDHoho007</title>
    <meta charset="UTF-8">
    <meta name="author" content="Fabian Dietrich">
	<meta name="description" content="Programmierer aus Leidenschaft.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        html {
            height: 100%;
        }

        body {
            margin: 0;
            background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
            font-family: cursive;
        }

        #container {
            display: flex;
            background-color: white;
            border-radius: 20px;
            margin: 100px auto auto;
            width: 40%;
            padding: 20px;
			box-shadow: #5b9aff 0px 0px 20px 20px;
        }

        @media screen and (max-width: 480px) {
            body {
                font-family: "Courier New", cursive;
            }
            #container {
                width: 80%;
                font-size: 10pt;
            }
        }

        a {
            text-decoration: none;
            color: royalblue;
            cursor: pointer;
        }

        #col-left {
            width: 30%;
            margin-right: 10%;
        }

        #col-right {
            width: 60%;
        }

        #col-left img {
            width: 100%;
        }

        #col-right img {
            width: 16px;
        }

        #imprint-wrapper {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow-y: scroll;
        }

        #imprint-background {
            opacity: 0;
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.25);
            transition: opacity 1s ease;
        }

        #imprint-container {
            opacity: 0;
            background-color: #fafafa;
            border-radius: 20px;
            padding: 20px;
            position: absolute;
            top: 750px;
            left: 30%;
            width: 40%;
            transition: all 1s ease;
            text-align: center;
            margin-bottom: 100px;
        }

        .visible {
            opacity: 1 !important;
        }

        #imprint-container.visible {
            top: 100px !important;
        }

        ul {
            text-align: left;
            width: 50%;
            margin: auto;
        }

    </style>

    <script>

        function showImprint() {
            document.getElementById('imprint-wrapper').style.display = "block";
            setTimeout(function() {
                document.getElementById('imprint-background').classList.add("visible");
                document.getElementById('imprint-container').classList.add("visible");
            }, 1);
        }

        function hideImprint() {
            document.getElementById('imprint-background').classList.remove("visible");
            document.getElementById('imprint-container').classList.remove("visible");
            setTimeout(function() {
                document.getElementById('imprint-wrapper').style.display = "";
            }, 1000);
        }

        if(location.hash.toLowerCase() === "#impressum")
            window.onload = showImprint;

    </script>

</head>

<body>

    <div id="container">

        <div id="col-left">
            <img alt="FDHoho007" src="https://myfdweb.de/logo.png"><br>
            <br>
            Fabian Dietrich<br>
            Alter: <?php echo(date("Y", time()-strtotime("18.07.2002"))-1970); ?> Jahre<br>
            Standort: Deutschland
        </div>

        <div id="col-right">
            <h1>FDHoho007</h1>
            Programmierer aus Leidenschaft.<br>
            <br>
            <b>Social Media</b><br>
            <a target="_blank" title="FDHoho007" href="https://www.youtube.com/channel/UCA07UFyCw6uxf-pM5V7OuUQ"><img alt="YouTube" src="youtube.png"> FDHoho007</a><br>
            <a target="_blank" title="FDHoho007#5466" href="https://discordapp.com/channels/@me"><img alt="Discord" src="discord.png"> FDHoho007#5466</a><br>
            <a target="_blank" title="FDHoho007" href="https://github.com/fdhoho007"><img alt="GitHub" src="github.png"> FDHoho007</a><br>
            <a target="_blank" title="@FDHoho007" href="https://twitter.com/fdhoho007"><img alt="Twitter" src="twitter.png"> @FDHoho007</a><br>
            <a target="_blank" title="@FDHoho007" href="https://www.instagram.com/fdhoho007"><img alt="Instagram" src="instagram.png"> @FDHoho007</a><br>
            <br>
            <b>Meine Projekte</b><br>
            <a target="_blank" title="MyFDWeb" href="https://myfdweb.de/"><img alt="MyFDWeb" src="https://myfdweb.de/logo.png"> MyFDWeb</a><br>
			<a target="_blank" title="FDServer.de" href="https://fdserver.de/"><img alt="FDServer" src="https://myfdweb.de/logo.png"> FDServer.de</a><br>
            <br>
            <a onclick="showImprint();">Impressum</a> | <a href="mailto:info@fdhoho007.de">Kontakt</a>
        </div>

    </div>

    <div id="imprint-wrapper">

        <div id="imprint-background" onclick="hideImprint();"></div>

        <div id="imprint-container">

            <div style="text-align: right;"><a onclick="hideImprint();">&times;</a></div>
            <h1>Impressum</h1>
            Diese Seite gibt Auskunft über den verantwortlichen Betreiber dieser Seite, der angegebenen Social Media Accounts und Projekte.
            <h3 class="text-heading">Angaben gemäß §5 TMG &amp; Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</h3>
            Fabian Dietrich<br>
            Hans-Sachs-Strasse 33<br>
            82194 Gröbenzell<br>
            Deutschland<br>
            <br>
            E-Mail: <a href="mailto:info@fdserver.de">info@fdhoho007.de</a><br>
            <h3>Haftung für Inhalte</h3>
            Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.<br>
            Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.<br>
            <h3>Haftung für Links</h3>
            Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.<br>
            Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.<br>
            <h3>Urheberrecht</h3>
            Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedarf der ausdrücklichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.<br>
            Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.

        </div>

    </div>

</body>

</html>
