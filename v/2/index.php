<head>

    <title>/</title>
    <meta name="theme-color" content="#FFB600">

	<!-- STYLESHEETS -->
    <link rel="Shortcut Icon" href="/include/img/icon.png" type="image/png">
    <!-- <link rel="stylesheet" type="text/css" href="/include/css/landing-page.css"> -->
    <link rel="stylesheet" type="text/css" href="landing-page.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<script charset="utf-8">
window.addEventListener("load", function(event) {
    var colors = document.getElementsByClassName('color-palette-item');

    // Background Color
    colors[0].style.background = "#FFB600";
    colors[1].style.background = "#220901";
    colors[2].style.background = "#621708";
    colors[3].style.background = "#941B0C";
    colors[4].style.background = "#BC3908";

    // innerText
    // colors[0].innerHTML = "<a href=\"#FFB600\" >";
    // colors[1].innerHTML = "<a href=\"#220901\" >";
    // colors[2].innerHTML = "<a href=\"#621708\" >";
    // colors[3].innerHTML = "<a href=\"#941B0C\" >";
    // colors[4].innerHTML = "<a href=\"#BC3908\" >";
});

document.addEventListener('keypress', (event) => {
    const keyName = event.key;
    document.getElementById('keypress-item').textContent = event.key;
    console.log('keypress event\n\n' + 'key: ' + keyName);

    var element = document.getElementsByClassName('keypress')[0];

    element.classList.remove("pop-key");

    // -> triggering reflow /* The actual magic */
    // without this it wouldn't work. Try uncommenting the line and the transition won't be retriggered.
    // Oops! This won't work in strict mode. Thanks Felis Phasma!
    // element.offsetWidth = element.offsetWidth;
    // Do this instead:
    void element.offsetWidth;

    // -> and re-adding the class
    element.classList.add("pop-key");
});

</script>

</head>
<body>
    <div class="container-div">
        <div class='color-palette'>
            <a class='color-palette-item' href="#FFB600"> </a>
            <a class='color-palette-item' href="#220901"> </a>
            <a class='color-palette-item' href="#621708"> </a>
            <a class='color-palette-item' href="#941B0C"> </a>
            <a class='color-palette-item' href="#BC3908"> </a>
        </div>
        <div class="center-div">
            <p class="center-item" >This Website is under Development. </p>
            <ul class="center-item">
                <li class="center-item" ><i class="material-icons md-18">link</i>&nbsp<a href="https://github.com/Hyvedrone/Hyvechat-Web-Front">https://github.com/Hyvedrone/Hyvechat-Web-Front</a></li>
                <li class="center-item" ><i class="material-icons md-18">link</i>&nbsp<a href="https://gitter.im/Hyvechat/Lobby">https://gitter.im/Hyvechat/Lobby</a></li>
            </ul>
        </div>
        <div class="keypress">
            <p class="keypress" id="keypress-item"></p>
        </div>
    </div>
</body>

















