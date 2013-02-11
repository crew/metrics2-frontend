metrics_test
============

Testing out graphs for metrics

What is in here:

Data.php: Gets around cross-domain get requests & gets our data from metrics
Data.json: dump file for testing new datafeeds.
Crew.png : Graphic
index.html: where the magic happens
light_alu: our background textures stuff

Data.php does 3 get requests for the metrics information and then bundles those into 1 json object which it hands off to index.html

Index.html then converst that to json, and parses out the information, putting the data into an array of touples [[x,y],[x,y]...] that is fed to the Hi-chart.

Hicharts does its magic and charts it up, displaying the information its given. Each new line is a sepparate "series" listed with a name, and a dataset (array of touples [x,y]).



