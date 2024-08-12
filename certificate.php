<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .certificate {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .subtitle {
            font-size: 18px;
            color: #666;
        }

        .content {
            margin-top: 30px;
            text-align: justify;
            line-height: 1.5;
        }

        .footer {
            margin-top: 30px;
            text-align: right;
            font-style: italic;
            color: #888;
        }
    </style>
	<script>
	//window.print();
	</script>
</head>
<body>


    <div class="certificate">
        <div class="header">
			<img src="img.jpg" width="150" align="center">
            <div class="title">Certificate of Achievement</div>
            <h4><?php echo $_POST['ename']; ?></h4>
			<div class="subtitle">Awarded to</div>
            <div class="name"><?php echo $_POST['esname']; ?></div>
        </div>

        <div class="content">
            <p>This is to certify that John Doe has successfully completed the course on HTML and CSS and has demonstrated proficiency in web development.</p>
            <p>Issued on: <?php echo $_POST['edate']; ?></p>
        </div>

        <div class="footer">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAkFBMVEX////9/f3+/v78+/wAAAAODg4TExMPDw8ICAgYGBgWFhYGBgYfHx/5+fkaGhocHBwiIiItLS0mJibw8PA4ODgyMjK8vLw/Pz+rq6svLy/Nzc3Hx8eKiort7e3c3Nx/f39NTU2fn59UVFTV1dV2dnZdXV2xsbE9PT1HR0dtbW1ZWVnj4+OJiYmWlpZlZWWmpqZY0bIIAAANW0lEQVR4nO2cCXuiMBCGsU4Owh0O641Hrdbr//+7ndhDBeyqJbBb+Z7dZ1sWNHlNZr4JQcPJqf1YygMwHp6J0ndM6m5bXbrEpPDk1u/VZTCXmdTdZt1SHSyGYlwi8uuZHNRuFUAx8khav3+MnOoSk8cbIEe121ksRhbJQyrP5NGJtDJQzpjU3bI6dc6kQXLQEcoJk7obVbe+oByZ1N2k+vXFpBklX/pE0TA50TmTS2c9PeGfX6ZDj65gUgil7sbr1WUqxiUidTe5AjVMilQMxShGUndjK9ItTOpua1Uqnj3GIyNRupJJ3c2sVlcxqbuRFauYSfuRkTzlkBSMk+w1xu/Td1T+zqTu1uvSbUweAsk5lAIml4ZJ3c3Wq2+gPCwT43omDzFxDrqHSd1t1q2GSZEaJnndzKTuBlegK5k80jA5iSgNk081TPJqmOTVMMmrYZJXwySvhkleDZO8GiZ5/etMWuttv+K3/NeZrDsAsAurfdN/mklrAlIyKkdVvuk/zmQKAbGFy9dVvmlVTJynoXPzBBitPJ+O49R9u+s971cVTPoJHJTcdFUobdu3lr4vxa8bJ4tXAMEkE5zfctk6Ir6EdGea3rJ185v+SNqZTC0ipScBLNlJr7+sNfW4BatwvOzA863v+UNpZuIMYk4tsJ9765QRuH4SbCEwx+O1Yft86tzYp59KL5MtThuQ8KZ65eBY2V57YZ9LEaf4Q5oGg9t69HNpZdIDMCGCj07NwU2vvHCWgu3JZ/UKHa9ix6aXyQKIJwBmH7++UFhdd6HT6bgeLPCnuUvmN/bo59LHpPUMnDCQXx/znMP4uksnlu8f5tkaPKh8mGhksgciOKTHA2PbXVx1ZR8IfWexlNeHoPKki0kvAIt7EJ98yuhTCkrc2Tx7sCXhkKKejBfgccXeREkTkz4AxY5FpwM/Lso7rWXuKKZhmys/v8cIXbU3UdLDZAiMMwsmZwcjm2/ypwLl0Dn1LUM/6krlScKltGXFtv4gTePkRdU355/xCNyCTz0Ei4iv1KS0Cmwb1OrAwAqiK4NyudIVT1Ywz6x6zECIfDyZAOdn9jaBWB7S8BArJDnLXVCBtOWdXArtAS+ojFOgVnR6YMAlvLbxhzkF9DN1rP/qy8VZPYOV9xoJCB9OzXtfiqDjIIqEea84hX43kwFmkVwXB2rqnLiWjet3uWI0XKHfu87OGO2721Ssypi0Y4aTJHt5hKH4xMOE1HXlTp3Uiz335S8vuX4PT2GR7fmJKmPSB0py4SEMbHkyGp4iX3QxCT0pK8vg2wDbG5gfmW0N1r2NKlZlTCZARS6zjjwW2MflkQRSz1ckEiuS7Js8PNumAojPYYi/OLvdvY0qVmVMTEHzY3wLDI4+DmcOCZSBbUuX0vjSK40GmK2XPhIBPTVzVUzWQDjLLpg52C12NLsL4XlCuZo3gVPq0k2dNoD3agsCwfhZTzFUFZMN2PCaPYjDhB/NyTqQUfCq0rDy+xcLnTVgUodurnQsTxUxacnAzndzCQSOsWAAwnUxmoyWUfT2TTAZ9hfJSOcabUVMFmCKw7QwwtHi+Xkx3g72iz2QIDha2ziih+Cysbx4WUbf7lVFTDqWrfrrJFLAURgUjta2h4mki9h2nMrXYVn9u0fVMOmD6XI5X6ll/JixrmBSUNtiFhzDSUo7CtscPFvUiqQiJj741MYk4wk7trlJgHrsxQULg+WnYxvyQJBha+tLr471xlNVwmSC+cXiNovcAGS6mszWoRMaU1X/Abyf4qwgSLfGjlA3+Jun160qmMzA4sRjjL7O55OvhNH2LBwR/Xd70ntRxWBqA3Ph1JXOqr+TUQmTPmB/CQX+1js9PEMXB0ioP9jYOK/4e9glEJ0EkyFk1i8rkXYmQxwBxMIebzOWYgDUMrdzrIwpOnmKOCxLBZj98ZQReCBu26FRhnQzSQ6DxIKXbCpZQ8CJDRIwzvjoTJDG4S+cFEA7z0RKlUPRy6Q1B1tYlizYkrYASwpGGGcMAhcodBkT9mw96MLy3bM4CQYcIdzKb2doZRIGwAUHi5xOiHc5OCqIRTwPvGAbJmBRNHO7A7n+x9lbiGjg0ih7qXbpZLLFeeERSpibv3e+B4sRgbXeJmwbxrPtQTr6tLT9g2cZg21S/2xlsj1JqtiLoo/JOsUPX937IpBfWJ2oDIN5J36vbrfUZZltJivwfYxDFhwpPM+BkgqiizYmPapGgkeJR1jOl06AWxZOluTj5Z6Ffb5eMuuYsY9nmPZXxB2umG9Tt+zF1wLpYjIGtytgHgnKADIDvpWqXIQW7eszH6DBPb3xNQDf801pm6b3iaoXYSHUXZrRxcWm0qSHyTAAhp5ka2zQdfiZxNHeQddEj3YSZBKcSccV6eE47vqeFDETrvw4tmWpa8sOQbe71F0hamGyx2hBTESyB06zG3HWSzRpQJg8PYanfTJxJh30NHYHJKWEv0eZUUqC6Rg27TDy7WWkefroYLLBghcDa9IyAKsc+7wHQxtMbkXu+RQAkx5cfNjbCvBMyoiZDt+CjzvHAyyofTueq8S0wVe89mbYndLAZA8u54fbDDtimnCeT5y0a3MurMyS+wrwUJDullgIxFTKgO4dY46jCV8lwVLJ9fzP2nAMHoFU5x6M8pmMgfmIpK+yC7rQzVmAbacUxxB6FjirB9UOSYu9L725rmvzw0LbXEJqJG+WbXcFPdq+ufXWlfY8VGuyLR273UpnsgXMvlxNnKHHGc1kiR12uusJL7fbb4EzinkWwQIa68Xx4SbFHgKyCwKf2RKWxxnY2nV8tTEb7Be5XKXL+XSbJLO+Y5QVe8tmkoDJKOMzozUDVcqc9x1NF3aZEZK/77mPVDWoVmhfFx8f/owgPGmLiGdW3rZuGnhdpMLAw1zvq43rlL9Mo+1iXcLAKZlJ6BMs61QpG3YsTk63PRpqMlkMcwln5xvdPrRQuTfaHCcVUqUSAXuDLMHZkliHItqC1AMmCRNezD3ETUHON/v9bP2DIqBkJjEm4XcrP8doSYKzls1AUIqjSAhS7LvC8AyVA1yis0t7Baf2tku14N1ZvUyn6XSJQ8WjnBKppp4KTLQz3vd6o/U986lUJk9vqoZ5TUJHDQmsds5b9OoGwvWZYNS67lNcufAyvc62Dvv9yeolwHrBVivhdiAl5vuoy/xpOkh629Vi1J8lwyRJer3xeLLpTFfRpY38pTJZIRJJ94ajSmIhMjZijFWyCRFnAgr2PxYpXBQNke80HM1m+9X0VYUan3Vi0Q2oDAACtbS5AismFotimcqo4118nqhMJmp5XiVhB/MxwXL4PDD2gCGS57FaM7mxp7drOEyeN2NXTSLLiyWTdix9EcSeHUC3604Py7/iwsUlMhmpyg6d1ZOxp2oOnaecMAafssFI5aXcCpMuhcPROplHywA/qwAoEvI3g8lgMp8M9ouLazElMpmqe1hq3TDB1Eho5i4NOlWTuE9oUGj1jxU44XC2nvXXo/CaQFYekzX6kcN98g0oa5/p+DOoHD0aAWO88oeUblR5TBZq3XV8iCoYSzLPes7Qmfjuxngj6OOqf/rkNpXHZA4WhzCcg0tMK+NTW0vOKaTttY3/1Hw3+O8qjYkj0VQONjYIGz1Tpmzdgs+pFRqv6B7++WFSHpN2ABztNmNY0WT3SmBGcglM3jdllbxJUYNKYxIKjgUOWmsG08woaUUKl1TTi1WxxvxTlRljiRoiBQ8ubUAI9TyKegrhWgtbp0r0JxMsU7l8y4WLvlqcVY8zRejpWB0PKd2oEpkYzxFdFgTQHaJSj2RM1D0wvSup5ahMJsXqYcnBYWAM1a6bbtXP2d8j/UwOAdZvGQO14FNZpfMTaWcyU3e/vGdl/W2Y1vBk7O3SzuRNTZmlqgElrX57zV3SzSRBJEL0sAbEIujKryuoW7qZLNU2UEBHZ9EadmHdJ81M0KYRDr2nLXDyH7j6d2lmonZVoHVVM4jZ/0MeVtLLJFRrkNBz0LVl71v9w9LLZIGJGDrqOR3TSvV0QIP0MpmD1eWTMZp6dsP3S9UtvUwARMzeBHCX1rFx/k5pZTJUd0pt3yWe1y37YXGN0sqkjyHWZDbWOXEtX1Bxp7QyScAirmcKYf4/wcTQzOTwzVvCFf/BeuOptDKZSUKkyep4Bucn0sok9DzGs98h9O9Lby5euwDx/4ZEd70Tbgf1Phd7jzQz+S/VMMmrYZJXwySvhkleDZO8GiZ5NUzyapjk1TDJq2GSV8Mkr4ZJXg2TvBomeTVM8mqY5NUwyathklfDJK+GSV5XMjmB8tupPBUjaZg0TM70LZMLAeWXQ7mMJMfkUaBcQvJXJr8Wylknb2TyS7FkuvhXJnkqv1yZ3jdMnhomRbqKyWNByXb+g0kOysNgyXe83TC5zORRqRQj+WCS/88HgFLQ5/YJk2IqvxpLUX/bVzD5nWAudzXD5BsoD6NPFIbjNEze9UHEcb6YNFAKmDw4lE8K50weGUs7w8RpmByJIJIDk4cfKSf9L2LyiFAySN6ZPPhAySD5YPLAQyU7SE6YnEF5GC7nfXayTLJQfj2WXH+/SPwBoTg2ZlML5toAAAAASUVORK5CYII=">
			<p>Signature</p>
            <p>Official Seal</p>
        </div>
    </div>
</body>
</html>
