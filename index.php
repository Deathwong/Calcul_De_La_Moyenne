<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moyenne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <form action="notes.php" method="post">
        <div class="noteDiv">
            <div class="divInput">
                notes math : <input type="text" name="noteMath" maxlength="2">
                <span></span>
                coef:
                <select name="coefMath">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="divInput">
                notes info : <input type="text" name="noteInfo" maxlength="2">
                coef :
                <select name="coefInfo">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="divInput">
                notes français : <input type="text" name="noteFrancais" maxlength="2">
                coef :
                <select name="coefFrancais">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <input type="submit" value="Moyenne">

        </div>
    </form>
</div>

</body>
</html>