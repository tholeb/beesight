
# Journal de bords - Capteur de poids 

## Avant 29/01/2019
- Démarrage du site internet
    - Dossier `Assets` mis en place
    - Index démarré (sticky navbar, footer, parallax, Datatables.js, charts.js)
- Recherche par rapport au capteur de poids, par rapport aux graphiques Charts.js
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

## 29/01/2019 - Mercredi
- Démarrage du "journal de bords" masse et module HS)
-  - [x] Étalonnage des capteurs de poids (chaque capteur a son module attribué et ne sera pas changé étant donné que les valeurs changent entres elles. 
### Capteur #0
|Poids *(kg)*|Résultat sur le capteur(?)|
|--|--|
| 0 kg (capteur vide) | 279 |
| 1 kg | 285 |
| 2 kg | 292 |
| 3 kg | 298 |
| 5 kg | 311 |
| 6 kg | 317|
| 7 kg | 321 |
| 8 kg | 327 |

#### Courbe de tendance de Capteur #0
![Courbe de tendance de y en fonction de x](https://i.imgur.com/wkPabUv.png)

### Capteur #1
|Poids *(kg)*|Résultat sur le capteur(?)|

| 0 kg (capteur vide) | 296 |
| 1 kg | 302 |
| 2 kg | 310 |
| 3 kg | 315 |
| 5 kg | 329 |
| 6 kg | 336|
| 7 kg | 345 |
| 8 kg | 350 |

#### Courbe de tendance de capteur #1
![Courbe de tendance de Module #1](https://i.imgur.com/3rwIbeU.png)

### Capteur #2
|Poids *(kg)*|Résultat sur le capteur(?)|
|--|--|
| 0 kg (capteur vide) | 308 |
| 1 kg | 314 |
| 2 kg | 321 |
| 3 kg | 327 |
| 5 kg | 327 |
| 6 kg | 305|
| 7 kg | 312 |
| 8 kg | 320 |

#### Courbe de tendance de capteur #2
![Courbe de tendance du module #2](https://i.imgur.com/DvhTE50.png)

## 30/01/2019 - Jeudi
- Ré-étalonnage du capteur (Cf: les valeurs au dessus)
<!--stackedit_data:
eyJoaXN0b3J5IjpbLTEyNjUyNDc1ODUsNzQ5OTAwOTAyLDE4MT
I0ODI2MjgsODIyMzQ1NTc2LDE3MzAzMzczNDZdfQ==
-->