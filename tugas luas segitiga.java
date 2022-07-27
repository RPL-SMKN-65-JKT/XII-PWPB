import java.util.Scanner;
import java.util.Locale;
  
class LuasSegitiga {
   
  static double hitungLuasSegitiga(double alas, double tinggi) {
    return 0.5 * alas * tinggi ;
  }
 
  public static void main(String args[]){
           
    Scanner input = new Scanner(System.in).useLocale(Locale.US);
      
    System.out.println("##  Program Java Menghitung Luas Segitiga  ##");
    System.out.println("=============================================");
    System.out.println();
     
    double a,t, luas;
 
    System.out.print("Input alas segitiga: ");
    a = input.nextDouble();
      
    System.out.print("Input tinggi segitiga: ");
    t = input.nextDouble();
      
    System.out.println("Luas segitiga: "+hitungLuasSegitiga(a,t));
 
  }
}
