<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Test</title>

    <link rel="stylesheet" href="css/css/piano_style.css" type="text/css" />
    <script src="audiosynth.js"></script>
    <script src="audiosynth.view.js"></script>

</head>

<body>

<div class="keyboard-options">
    Sound
    <select ID="sound">
        <option value="0" selected>Keyboard</option>
    </select>
    <div ID="keyboard" class="keyboard-holder"></div>
    <div class="keyboard-options">
        Range [C<span ID="OCTAVE_LOWER">3</span>-B<span ID="OCTAVE_UPPER">5</span>]
        <input type="button" ID="-_OCTAVE" value="-" />
        <input type="button" ID="+_OCTAVE" value="+" /><br />
        <i>(Use left/right arrows to adjust with keyboard)</i>
    </div>


    <script type="text/javascript">

        var a = new AudioSynthView();
        a.draw();

    </script>

</body>
</html>
