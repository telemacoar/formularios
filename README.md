## About Formularios

This is an api rest, for basic creation of forms schemas.

## Form schema

"data": { //Form
  "id": 1,
  "code": "inspvehiculo",
  "name": "VEHÍCULOS",
  "label": "VEHÍCULOS",
  "version": "1",
  "formsections": { //Form Sections
    "data": [
    {
      "id": 199,
      "code": "x5ba54f92c0520014b6b74fd6f5fb0a34",
      "name": "PLANILLA DE CONTROL",
      "label": "PLANILLA DE CONTROL",
      "order": "2",
      "formschema_id": 1,
        "formgroups": { //Form Group (It cant contain many fields)
        "data": [
        {
          "id": 546,
          "code": "xecdd923e654755248d3c68316cc72d14",
          "name": "xecdd923e654755248d3c68316cc72d14",
          "label": "Vehiculo",
          "order": "3",
          "formsection_id": 199,
            "formfields": { //Fields of the section
            "data": [
            {
              "id": 589,
              "name": "x6e762e2b09260842b5fd82536b8457cc",
              "label": "Vehiculo",
              "code": "x6e762e2b09260842b5fd82536b8457cc",
              "mandatory": true,
              "enabled": true,
              "validate": ".",
              "order": "8",
              "formgroup_id": 546,
              "formfieldtype_id": 2,
              "formfieldevents": {
              "data": []
            },...


## Example request.http

Use this file to interact with the server.

