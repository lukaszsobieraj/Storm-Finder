<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Find a storm</title>
        <link rel="stylesheet"  href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet"  href="materialize/css/materialize.min.css"/>
        <link rel="stylesheet"  href="lukas.css"/>
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div>
                <form action="result.php" method="post" class="col s12">
                    <h3>Storm Finder</h3>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="place" type="text" class="validate" name="place" required placeholder="Enter the name of some place">
                            <label for="place">Place</label>
                        </div>
                    </div>
                    <h5>Choose a type of information:  </h5>
                    <p>
                        <input type="checkbox" id="direction" name="direction" />
                        <label for="direction">Direction</label>
                    </p>
                    <p>
                        <input type="checkbox" id="lightnings" name="lightnings" />
                        <label for="lightnings">Lightnings</label>
                    </p>
                    <p>
                        <input type="checkbox" id="distance" name="distance" />
                        <label for="distance">Distance</label>
                    </p>
                    <p>
                        <input type="checkbox" id="period"  name="period" class="validate"/>
                        <label for="period">Period</label>
                    </p>
                    <br/>
                    <h6>Additional option: </h6>
                    <p>
                        <input type="checkbox" id="radius"  name="radius" />
                        <label for="radius">Radius</label>
                    </p>
                    <div class="input-field col s6 radius" style="display: none">
                        <p>
                            <input id="radius" type="number" class="validate" name="radiusfield">
                            <label for="radius">Radius</label>
                        </p>
                    </div>
                    <button class="btn btn-default" type="submit">Check</button>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="stormscript.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>

</html>
