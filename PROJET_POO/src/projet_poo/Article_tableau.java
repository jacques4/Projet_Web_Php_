/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet_poo;

import java.util.List;
import javax.swing.table.DefaultTableModel;
/**
 *
 * @author Divin_wsk James
 */
public class Article_tableau {
    
      private static DefaultTableModel tabMod;
   
   public static DefaultTableModel affichertableau()
   {
       String entete[] ={"code","libelle","prix","quantite","Date d'ajout"};
       
       tabMod=new DefaultTableModel();
       tabMod.setColumnIdentifiers(entete);
//       List<EtudiantController> list_etudiant =  new  EtudiantControl().lister();
       List<Article> list_article = new Traitement().lister();
       
       for (Article art : list_article) {
           String tabData []={String.valueOf(art.getCode()),art.getLibelle(),String.valueOf(art.getPrix()),String.valueOf(art.getQuantite()),art.getDatecreation().toString()};
           tabMod.addRow(tabData);
       }
       
   return tabMod;
   }
   
    public static DefaultTableModel affichertableaus()
   {
       String entete[] ={"code","libelle","prix","quantite","Date d'ajout"};
       
       tabMod=new DefaultTableModel();
       tabMod.setColumnIdentifiers(entete);
//       List<EtudiantController> list_etudiant =  new  EtudiantControl().lister();
       List<Article> list_articles = new Traitement().seuil();
       
       for (Article art : list_articles) {
           String tabData []={String.valueOf(art.getCode()),art.getLibelle(),String.valueOf(art.getPrix()),String.valueOf(art.getQuantite()),art.getDatecreation().toString()};
           tabMod.addRow(tabData);
       }
       
   return tabMod;
   }
    
    public static DefaultTableModel affichervente()
   {
       String entete[] ={"code","libelle","prix","quantite","Date d'ajout"};
       
       tabMod=new DefaultTableModel();
       tabMod.setColumnIdentifiers(entete);
//       List<EtudiantController> list_etudiant =  new  EtudiantControl().lister();
       List<Article> list_articles = new Traitement().veliste();
       
       for (Article art : list_articles) {
           String tabData []={String.valueOf(art.getCode()),art.getLibelle(),String.valueOf(art.getPrix()),String.valueOf(art.getQuantite()),art.getDatecreation().toString()};
           tabMod.addRow(tabData);
       }
       
   return tabMod;
   }
    
    public static DefaultTableModel afficherappro()
   {
       String entete[] ={"code","libelle","prix","quantite","Date d'ajout"};
       
       tabMod=new DefaultTableModel();
       tabMod.setColumnIdentifiers(entete);
//       List<EtudiantController> list_etudiant =  new  EtudiantControl().lister();
       List<Article> list_articles = new Traitement().apliste();
       
       for (Article art : list_articles) {
           String tabData []={String.valueOf(art.getCode()),art.getLibelle(),String.valueOf(art.getPrix()),String.valueOf(art.getQuantite()),art.getDatecreation().toString()};
           tabMod.addRow(tabData);
       }
       
   return tabMod;
   }
}
