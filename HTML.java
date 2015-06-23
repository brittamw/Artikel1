import java.util.ArrayList;

public class HTML implements Druckstrategie{

	public void drucken(ArrayList<Artikel> liste){
		System.out.println("<table>");
		System.out.println("	<tr>");
		for(int i = 0; i < liste.size(); i++){
			
			System.out.println("		<td>" + liste.get(i).getArtikelBezeichnung() + ", " +liste.get(i).getArtikelPreis() + "</td>");
			
		}
		System.out.println("	</tr>");
		System.out.println("</table>");
	}

}
