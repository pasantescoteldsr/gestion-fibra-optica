var wms_layers = [];

var format_trazados_0 = new ol.format.GeoJSON();
var features_trazados_0 = format_trazados_0.readFeatures(json_trazados_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_trazados_0 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_trazados_0.addFeatures(features_trazados_0);
var lyr_trazados_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_trazados_0, 
                style: style_trazados_0,
                interactive: true,
                title: '<img src="styles/legend/trazados_0.png" /> trazados'
            });
var format_textocalles_1 = new ol.format.GeoJSON();
var features_textocalles_1 = format_textocalles_1.readFeatures(json_textocalles_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_textocalles_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_textocalles_1.addFeatures(features_textocalles_1);
var lyr_textocalles_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_textocalles_1, 
                style: style_textocalles_1,
                interactive: true,
                title: '<img src="styles/legend/textocalles_1.png" /> textocalles'
            });
var format_postes_2 = new ol.format.GeoJSON();
var features_postes_2 = format_postes_2.readFeatures(json_postes_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_postes_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_postes_2.addFeatures(features_postes_2);
var lyr_postes_2 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_postes_2, 
                style: style_postes_2,
                interactive: true,
                title: '<img src="styles/legend/postes_2.png" /> postes'
            });

lyr_trazados_0.setVisible(true);lyr_textocalles_1.setVisible(true);lyr_postes_2.setVisible(true);
var layersList = [lyr_trazados_0,lyr_textocalles_1,lyr_postes_2];
lyr_trazados_0.set('fieldAliases', {});
lyr_textocalles_1.set('fieldAliases', {'text': 'text', });
lyr_postes_2.set('fieldAliases', {'REDCLA': 'REDCLA', 'AREA_CENTR': 'AREA_CENTR', 'SERVICIO': 'SERVICIO', });
lyr_trazados_0.set('fieldImages', {});
lyr_textocalles_1.set('fieldImages', {'text': 'TextEdit', });
lyr_postes_2.set('fieldImages', {'REDCLA': '', 'AREA_CENTR': '', 'SERVICIO': '', });
lyr_trazados_0.set('fieldLabels', {});
lyr_textocalles_1.set('fieldLabels', {'text': 'no label', });
lyr_postes_2.set('fieldLabels', {'REDCLA': 'inline label', 'AREA_CENTR': 'inline label', 'SERVICIO': 'inline label', });
lyr_postes_2.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});