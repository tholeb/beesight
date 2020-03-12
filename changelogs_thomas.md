
# Fichier de bords - Thomas LEBRETON

## Capteur de masse

### Avant 29/01/2019
- Recherche par rapport au capteur de poids, (docs)
- Tentative de prise de mesures sur le capteur (mesures fausses, manquement de la masse)
- Programme de la masse: 
```arduino
int analogPin = A0;
int val = 0;

void setup() {
  Serial.begin(9600);
}
void loop() {
  val = analogRead(analogPin);
  val = map(val,348,521,0,500);
  Serial.println(val);
  delay (1000);
}
```

### 29/01/2019 - Mercredi
- Démarrage du *"fichier de bords"*
- Étalonnage des capteurs de poids (chaque capteur a son module attribué et ne sera pas changé étant donné que les valeurs changent entres elles. 
#### Capteur #0
|Poids *(kg)*|Résultat sur le capteur(?)|
|--|--|
| 0 kg (capteur vide) | 276 |
| 1 kg | 282 |
| 2 kg | 289 |
| 3 kg | 294 |
| 5 kg | 304 |
| 6 kg | 311|
| 7 kg | 320 |
| 8 kg | 327 |

##### Courbe de tendance de Capteur #0
![Courbe de tendance de y en fonction de x](https://i.imgur.com/ykvpD7x.png)

#### Capteur #1
|Poids *(kg)*|Résultat sur le capteur(?)|
|--|--|
| 0 kg (capteur vide) | 343 |
| 1 kg | 350 |
| 2 kg | 357 |
| 3 kg | 363 |
| 5 kg | 377 |
| 6 kg | 383 |
| 7 kg | 389 |
| 8 kg | 396 |

##### Courbe de tendance de capteur #1
![Courbe de tendance de Module #1](https://i.imgur.com/U3jx82K.png)

#### Capteur #2
|Poids *(kg)*|Résultat sur le capteur(?)|
|--|--|
| 0 kg (capteur vide) | 308 |
| 1 kg | 314 |
| 2 kg | 321 |
| 3 kg | 327 |
| 5 kg | 340 |
| 6 kg | 346|
| 7 kg | 352 |
| 8 kg | 360 |

##### Courbe de tendance de capteur #2
![Courbe de tendance du module #2](https://i.imgur.com/PWdDhDC.png)

### 30/01/2019 - Jeudi
- Ré-étalonnage du capteur (Cf: les valeurs au dessus)
- Mis à Jour du site internet ()

### 04/03/2019 - Mercredi
- mise en place de la value `map`
- Essais d'autres methodes 

### 12/03/2019 - Jeudi  

- login/register form  
- forms styles### 04/03/2019 -Mercredi  

- login/register form  
- forms styles# 04/03/2019 -Mercredi
- login/register form
- forms styles

## Changelogs site internet

### Avant 29/01/2019
- Démarrage du site internet
    - Dossier `Assets` mis en place
    - Index démarré *(sticky navbar, footer, parallax, Datatables.js, charts.js)*
- Recherche par rapport a [Charts.js](https://www.chartjs.org/)

### 30/01/2020 - Jeudi
- Pages
	- Graphique de la masse ([Charts.js](https://www.chartjs.org/))
	- Tableau de la masse ([datatables.js](https://www.datatables.net/))

### 04/03/2019 -Mercredi
- login/register form
- forms styles

### 12/03/2019 -Mercredi
- paramétrage du VPS
- mise en place de la bdd
<!--stackedit_data:
eyJoaXN0b3J5IjpbLTg1MTY0NzY0MV19
-->