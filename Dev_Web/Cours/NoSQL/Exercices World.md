### Créer une base de données monde, une collection world et importer les données dans cette collection
mongoimport --db monde --collection world --jsonArray --file world.json
### Déterminer le nombre exact de pays
db.world.countDocuments()

### Lister les différents continents
db.world.distinct("Continent")
### Lister les informations de la France
db.world.find({Name:"France"})
### Lister les pays du continent européen, ayant une population inférieure à 100000 habitants
db.world.find({"Continent":"Europe","Population": {$lt: 100000}})
### Lister les pays indépendants du continent océanique
 db.world.find({"Continent":"Oceania","IndepYear": {$ne: "NA"}},{ "Name": 1, "_id": 0, IndepYear: 1})
### Quel est le plus gros continent en terme de surface ? (Un seul continent affiché à la fin)
db.world.aggregate([
{ $group : {_id : "$Continent", totalSurface : {$sum : "$SurfaceArea"} } },
{ $sort: { totalSurface: -1 } },
{ $limit: 1 } ])

### Donner par continents le nombre de pays, la population totale et en bonus le nombre de pays indépendant
db.world.aggregate([ { $group: { _id: "$Continent", totalPays: { $sum: 1 }, totalPopulation: { $sum: "$Population" }, totalIndependant: { $sum: { $cond: { if: { $ne: ["$IndepYear", null] }, then: 1, else: 0 } } } } } ])
### Donner la population totale des villes de France
db.pays.aggregate( { $match: { Name: { $eq: "France" } } }, { $unwind: "$Cities" }, { $group : { _id:'France', Somme: { $sum: "$Cities.Population" } } })
### Donner la capitale (uniquement nom de la ville et population) de France
db.world.findOne({ "Name": "France" }, { "Capital.Name": 1, "Capital.Population": 1, "_id": 0 })
### Quelles sont les langues parlées dans plus de 15 pays ?
db.world.aggregate([ { $unwind: "$OffLang" }, { $group: { _id: "$OffLang.Language", Count: { $count: {} } } }, { $sort: { Count: -1 } }, { $match: { Count: { $gt: 15 } } }])