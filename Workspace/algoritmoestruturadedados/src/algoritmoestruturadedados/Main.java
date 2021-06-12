package algoritmoestruturadedados;

public class Main {

	public static void main(String[] args) {

		// a. Cria��o de pilhas
		TadPilha pilha1 = new TadPilha(10);
		TadPilha pilha2 = new TadPilha(10);

		TadPilha expressao = new TadPilha(10);

		char simbolo;
		char expres[] = {'(',')' ,'['};
		for (int i = 0; i < expres.length; i++) {
			if (expres[i]== '(' || expres[i] == '[') {
				expressao.empilha(simbolo);
				simbolo ++;
			}else {
				expressao.desempilha();
				}
		}
	}

		// b. Empilhar os 10 primeiros n�meros �mpares na pilha1 (Lucas)

//         int impar = 1;
//         for(int i = 0; i < 20; i++){
//             pilha1.empilha(impar);
//             impar += 2; // ou impar=impar+2;
//         }

		// vers�o com while (Gustavo)
		// int valor = 1;
		// while (!pilha1.cheia()){
		// pilha1.empilha(valor);
		// valor = valor + 2;
		// }

//       while (!pilha2.cheia()) {
//    	   
//    	   pilha2.empilha( pilha1.desempilha());
//       }
//
//       // c. Imprimir os elementos da pilha1
//          pilha1.imprime();
//          pilha2.imprime();

	} // main
} // class