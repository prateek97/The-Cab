
var citiesArray = new Array("Gurgaon", "New Delhi", "Manesar", "Faridabad");

var areaList = new Array();
areaList[0]="";
areaList[1]="Sector-4|Sector-5|Sector-7|Sector-10|Sector-14|Sector-15|Sector-17A|Sector-17B|Sector-17C|Sector-22|Sector-23A|Sector-23A";
areaList[2]="Hauz Khas|Lajpat Nagar|Karol Bagh|Palam Vihar|Rohini|Udyog Vihar|Vasant Kunj";
areaList[3]="Sector-1A|Sector-1B|Sector-1C";
areaList[4]="Sector-1A|Sector-1B|Sector-1C";



function populateAreas( cities, areas ) {
    
    var selctedCityIndex = document.getElementById( cities ).selectedIndex;

    var areasElement = document.getElementById( areas );
    
    areasElement.length=0;
    areasElement.options[0] = new Option(' Select Area ','');
    areasElement.selectedIndex = 0;
    
    var areasArray = areaList[selctedCityIndex].split("|");
    
    for (var i=0; i<areasArray.length; i++) {
        areasElement.options[areasElement.length] = new Option(areasArray[i],areasArray[i]);
    }
}

function populateCities( cities, areas ){
    
    var citiesElement = document.getElementById(cities);
    citiesElement.length=0;
    citiesElement.options[0] = new Option(' Select Cities ','-1');
    citiesElement.selectedIndex = 0;
    for (var i=0; i<citiesArray.length; i++) {
        citiesElement.options[citiesElement.length] = new Option(citiesArray[i],citiesArray[i]);
    }

    if( areas ){
        citiesElement.onchange = function(){
            populateAreas( cities, areas );
        };
    }
}