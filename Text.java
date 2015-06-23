import java.util.ArrayList;



public class Text implements Druckstrategie{

	
	public void drucken(ArrayList<Artikel> liste){
		for(int i = 0; i < liste.size(); i++){
			System.out.println(liste.get(i).getArtikelBezeichnung() + ", " + liste.get(i).getArtikelPreis());
			
		}
		
	}
	

}
