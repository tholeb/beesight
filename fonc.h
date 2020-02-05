//Ici les Fonctions des capteurs !!

  //Activité des abeilles
void captSonnor(){
  
    float ISonnor; //intensiter sonnor
    ISonnor=analogRead(song);   //connect mic sensor to Analog 0
    Serial.print(ISonnor);//print the sound value to serial
    delay(100);    
  }
  
  //Tepérature de la ruche
void captTemp(){

  }

  //Masse de la ruche
void captMasse(){
    w0=analogRead(weight0);
    w1=analogRead(weight1);
    w2=analogRead(weight2);
    w3=analogRead(weight3);
  }

  //RazMasse
void razMasse(){
  
  }
