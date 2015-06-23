import java.util.ArrayList;


public class Rechnung {
	
	private ArrayList<Artikel> artikelListe = new ArrayList<Artikel>();
	private Druckstrategie druckstrategie;
	
	
	
	public void setDruckStrategie(Druckstrategie strategie){
		this.druckstrategie = strategie;
	}
	
	
	public void add(String artikelBezeichnung, float artikelPreis){
		
		Artikel artikel = new Artikel(artikelPreis, artikelBezeichnung);
		
		artikel.setArtikelBezeichnung(artikelBezeichnung);
		artikel.setArtikelPreis(artikelPreis);
		artikelListe.add(artikel);
	}
	
	public void drucken(){
		druckstrategie.drucken(artikelListe);
	}
}
