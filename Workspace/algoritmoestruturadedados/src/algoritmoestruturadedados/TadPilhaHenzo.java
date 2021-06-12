package algoritmoestruturadedados;

public class TadPilhaHenzo {

	int capacidade;
	int dados[];
	int n;
	int topo;

	public TadPilhaHenzo(int n) {
		
		topo = -1;
		capacidade = n;
		dados = new int[capacidade];

	}

	public boolean empilhar(int valor) {

		if(cheia()) { return false;}
		else {
		topo++;
		dados[topo]= valor;
		return true;
		}
//		if (cheia())
//			return false;
//		topo++;
//		dados[topo] = valor;
//		return true;
	}

//	public boolean desempilhar() {
//		return (topo == -1);
//	}

	public boolean cheia() {

		return (topo == capacidade - 1);
		//return false;
	}

	public boolean vazio() {
		return (topo == -1);
	}

	public int desempilha() {
		// ----------------------------------------------------------------
		int retorno = -1;

		if (!this.vazio()) {
			retorno = dados[this.topo];
			this.topo--;
		}
		return retorno;
	}

	public void imprime() {

		int i;
		for (i = 0; i <= topo; i++)
			System.out.println("Elemento [" + i + "]=" + this.dados[i]);
	}

	public int topper() {
		return (topo);
	}

//	public static void main(String[] args) {
//
//		// a. Criação de pilhas
//		TadPilhaHenzo p1 = new TadPilhaHenzo(10);
//		TadPilhaHenzo p2 = new TadPilhaHenzo(10);
//		
//		 int impar = 1;
//         for(int i = 0; i < 20; i++){
//             p1.empilhar(impar);
//             impar += 2; // ou impar=impar+2;
//         }
////		for (int i = 0; i < 21; i++) {
////			if (i % 2 != 0)
////				p1.empilhar(i);
////		}
//
//		for (int j = 0; j < 21; j++) {
//			if (j % 2 != 0)
//				p2.empilhar(p1.desempilha());
//		}
//		p2.imprime();
//
//	}
}