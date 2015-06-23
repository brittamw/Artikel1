
public class MainClass {

	public static void main(String[] args) {
		
		Rechnung rechnung1 = new Rechnung();
		
		rechnung1.setDruckStrategie(new HTML());
		rechnung1.add("Mousepad", 30);
		rechnung1.add("Mouse", 20);
		rechnung1.drucken();
	}
}
