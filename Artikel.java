
public class Artikel {

	private float artikelPreis;
	private String artikelBezeichnung;
	
	public Artikel(float preis, String bezeichnung){
		
	}
	
	public void setArtikelPreis(float preis){
		this.artikelPreis = preis;
	}
	public float getArtikelPreis(){
		return artikelPreis;
		
	}
	public void setArtikelBezeichnung(String bezeichnung){
		this.artikelBezeichnung = bezeichnung;
	}
	public String getArtikelBezeichnung(){
		return artikelBezeichnung;
	}
}
