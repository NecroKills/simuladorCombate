Crie um simulador de combate que manipule 3 tipos de unidade: cavalaria, piqueiro e arqueiro. 
O arqueiro derrota o cavaleiro, piqueiro derrota arqueiro, cavaleiro derrota o piqueiro. 
Entrar com dois exércitos, cada um com uma quantidade específica de unidades escolhida pelo usuário. 

O simulador deve fazer com que as unidades entrem em combate umas com as outras. 
Durante o combate uma unidade de um exercito luta contra uma unidade do outro exército, onde somente uma unidade deve vencer. 
A unidade perdedora deve sair da lista do exercito. 
O simulador continua a combater as unidades até que um exército seja exterminado. 
As unidades específicas devem ser desacopladas do simulador através de polimorfismo. Cada unidade deve saber se
vence ou perde a partir da chamada de um método. 

Dica: para facilitar dê um valor
numérico para cada unidade assim você pode calcular quem vai vencer a partir da
comparação entre estes valores.