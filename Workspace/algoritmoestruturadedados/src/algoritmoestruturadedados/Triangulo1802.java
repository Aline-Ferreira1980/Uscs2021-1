package algoritmoestruturadedados;

public class Triangulo1802 {

		static int lado1;
		static int lado2;
		static int lado3;
		static String tipo;
		
		public Triangulo1802(int a, int b, int c){
			lado1 = a;
			lado2 = b;
			lado3 = c;
		}
		
		 public int calculaArea() {
			 int area = lado1 * lado2 * lado3;
			 return area;
		 }
		
		public static void tipo() {
			if(lado1 != lado2 && lado3 != lado2 && lado3!= lado1) {
					tipo = "Escaleno"; 
			}
			else if(lado1 == lado2 & lado1== lado3) {
				tipo = "Equilatero";
			}
			else {
				tipo = "Isósceles";
			}
			System.out.println(tipo);
		}
		public static void main(String[] args) {
			Triangulo1802 triangulo = new  Triangulo1802(10,10, 10);
			System.out.println(triangulo.calculaArea()); 
			tipo();
			 //System.out.printf(calculaArea(), tipo());
			
		}
	
	}


