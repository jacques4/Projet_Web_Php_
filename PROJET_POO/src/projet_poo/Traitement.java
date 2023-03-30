/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet_poo;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author Divin_wsk James
 */
public class Traitement implements Inter<Article>{
    
    // ENREGISTREMENT DES ARTICLES //
    
   @Override
   public boolean enregistrer(Article t) {
        Connection con= ConnectionBD.seConnecter();
        
        String requete ="INSERT INTO article(libelle,prix,quantite,datecreation) value(?,?,?,?)";
        
        boolean nonExecut=false;
        
        try {
            
            PreparedStatement ps= con.prepareStatement(requete);
            ps.setString(1, t.getLibelle());
            ps.setInt(2, t.getPrix());
            ps.setInt(3, t.getQuantite());
            ps.setDate(4, new java.sql.Date(t.getDatecreation().getTime()));
          
            ps.execute();
            nonExecut=true;
            JOptionPane.showMessageDialog(null, "Enregistrement reussi ");
            
        } catch (SQLException ex) {
            Logger.getLogger(Article.class.getName()).log(Level.SEVERE, null, ex);
        }
        return nonExecut;
    }

// SUPPRIMER DES ARTICLES //
   
    @Override
    public boolean supprimer(Article t) {
          Connection con = ConnectionBD.seConnecter();
        boolean execute =false;
        String requete = "DELETE from article where code= ?";    
        
        try {
            PreparedStatement pr = con.prepareStatement(requete);
           pr.setInt(1, t.getCode());
           pr.execute();
            execute =true;
            JOptionPane.showMessageDialog(null, "Suppression reussi ");
        } catch (SQLException ex) {
            Logger.getLogger(Traitement.class.getName()).log(Level.SEVERE, null, ex);
        }
        return execute;
    }
// MODIFIER DES ARTICLES //
    @Override
    public boolean modifier(Article t) {
        Connection con= ConnectionBD.seConnecter();
        boolean nonExecute=false;
        String requete= "UPDATE article set libelle= ?, prix= ?, quantite= ?, datecreation= ?  where code= ?";
        
        try {
            PreparedStatement ps= con.prepareStatement(requete);
            
            ps.setString(1, t.getLibelle());
            ps.setInt(2, t.getPrix());
            ps.setInt(3, t.getQuantite());
            ps.setDate(4, new java.sql.Date(t.getDatecreation().getTime()));
            ps.setInt(5, t.getCode());
            ps.execute();
            nonExecute=true;
            JOptionPane.showMessageDialog(null, "Modification reussi ");
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        } catch (SQLException ex) {
            Logger.getLogger(Traitement.class.getName()).log(Level.SEVERE, null, ex);
     
 }
        return nonExecute;
    }
// RECHERCHER DES ARTICLES //
    
    @Override
    public DefaultTableModel rechercher(String t) {
             String entete[] ={"code","libelle","prix","quantite","Date d'ajout"};
       
       DefaultTableModel tabMod=new DefaultTableModel();
       tabMod.setColumnIdentifiers(entete);
       List<Article> list_article = new Traitement().lister();
       
       for (Article art : list_article) {
           if(art.getLibelle().equals(t))
           {
           String tabData []={String.valueOf(art.getCode()),art.getLibelle(),String.valueOf(art.getPrix()),String.valueOf(art.getQuantite()),art.getDatecreation().toString()};
           tabMod.addRow(tabData);
           }
       }
       
   return tabMod;
       }
// VENTE DES ARTICLES //
    
    @Override
    public boolean vente(Article t,int qtes) {
        
         Connection con= ConnectionBD.seConnecter();
        boolean nonExecute=false;
        String requete= "UPDATE article set quantite= ? where code= ?";
        
        try {
            PreparedStatement ps= con.prepareStatement(requete);
            
            ps.setInt(1, t.getQuantite()-qtes);
            int cd =t.getQuantite()-qtes;
            ps.setInt(2, t.getCode());
            if(cd>0)
            {
            ps.execute();
            nonExecute=true;
            
            }
            else
            {
             JOptionPane.showMessageDialog(null, "Quantite erroner ");
            }
            
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        } catch (SQLException ex) {
            Logger.getLogger(Traitement.class.getName()).log(Level.SEVERE, null, ex);
     
 }
         catch(NumberFormatException e)
        {
        JOptionPane.showMessageDialog(null, "Quantite erroner ");
        }
        return nonExecute;
        
        
    }
// APPROVISIONNEMENT DES ARTICLES//
    
    public boolean approvisionner(Article t ,int quantite) {
     
         Connection con= ConnectionBD.seConnecter();
        boolean nonExecute=false;
        String requete= "UPDATE article set quantite= ?  where code= ?";
        int p = t.getQuantite() + quantite;
        try {
            PreparedStatement ps= con.prepareStatement(requete);
            ps.setInt(1, p);
            ps.setInt(2, t.getCode());
            ps.execute();
            nonExecute=true;
            JOptionPane.showMessageDialog(null, "Approvisionement reussi ");
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        } catch (SQLException ex) {
            Logger.getLogger(Traitement.class.getName()).log(Level.SEVERE, null, ex);
     
 }
        catch(NumberFormatException e)
        {
        JOptionPane.showMessageDialog(null, "Quantite erroner ");
        }
        return nonExecute;
        
    }
// LISTE DES ARTICLES //
    
    public List<Article> lister() {
        Connection con = ConnectionBD.seConnecter();
        String requete="Select * from article";
        List<Article> list_article =new ArrayList<Article>();
        ResultSet rs;
        try {
            Statement state= con.createStatement();
           rs= state.executeQuery(requete);
           while(rs.next())
           {
               Article art = new Article();
               art.setCode(rs.getInt("code"));
               art.setLibelle(rs.getString("libelle"));
               art.setPrix(rs.getInt("prix"));
               art.setQuantite(rs.getInt("quantite"));
               art.setDatecreation(new java.sql.Date(rs.getDate("datecreation").getTime()) );
               list_article.add(art);
            } 
        } catch (SQLException ex) {
            Logger.getLogger(Traitement.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list_article;
    }

        // LISTE DES ARTICLE SELON UN SEUIL DONNEES //
    
    @Override
    public List<Article> seuil() {
        Connection con = ConnectionBD.seConnecter();
        String requete="Select * from article where quantite < 60";
        List<Article> list_article =new ArrayList<Article>();
        ResultSet rs;
        try {
            Statement state= con.createStatement();
           rs= state.executeQuery(requete);
           while(rs.next())
           {
               Article art = new Article();
               art.setCode(rs.getInt("code"));
               art.setLibelle(rs.getString("libelle"));
               art.setPrix(rs.getInt("prix"));
               art.setQuantite(rs.getInt("quantite"));
               art.setDatecreation(new java.sql.Date(rs.getDate("datecreation").getTime()) );
               list_article.add(art);
            } 
        } catch (SQLException ex) {
            Logger.getLogger(Traitement.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list_article;
    }
// LE NOMBRE DES ARTICLES //
    
   @Override
    public int nombre() {
        return lister().size();
    }
// ENREGISTREMENT DES VENTE DANS LA BASE DE DONNEES //
    
    @Override
    public boolean ventes(Article t) {
       Connection con= ConnectionBD.seConnecter();
        
        String requete ="INSERT INTO vente(libelle,prix,quantite,datecreation) value(?,?,?,?)";
        
        boolean nonExecut=false;
        
        try {
            
            PreparedStatement ps= con.prepareStatement(requete);
            ps.setString(1, t.getLibelle());
            ps.setInt(2, t.getPrix());
            ps.setInt(3, t.getQuantite());
            ps.setDate(4, new java.sql.Date(t.getDatecreation().getTime()));
          
            ps.execute();
            nonExecut=true;
            JOptionPane.showMessageDialog(null, "Vente reussi ");
            
        } catch (SQLException ex) {
            Logger.getLogger(Article.class.getName()).log(Level.SEVERE, null, ex);
        }
        return nonExecut;
    }
// ENREGISTREMENT DES APPROVISIONNEMENT //
    
    @Override
    public boolean approvisionners(Article t) {
        Connection con= ConnectionBD.seConnecter();
        
        String requete ="INSERT INTO approvisionner(libelle,prix,quantite,datecreation) value(?,?,?,?)";
        
        boolean nonExecut=false;
        
        try {
            
            PreparedStatement ps= con.prepareStatement(requete);
            ps.setString(1, t.getLibelle());
            ps.setInt(2, t.getPrix());
            ps.setInt(3, t.getQuantite());
            ps.setDate(4, new java.sql.Date(t.getDatecreation().getTime()));
          
            ps.execute();
            nonExecut=true;
            JOptionPane.showMessageDialog(null, "Approvisionemment reussi ");
            
        } catch (SQLException ex) {
            Logger.getLogger(Article.class.getName()).log(Level.SEVERE, null, ex);
        }
        return nonExecut;
    }
// LISTE DES ARTICLES APPROVISIONNEMENT //
    
    @Override
    public List<Article> apliste() {
        Connection con = ConnectionBD.seConnecter();
        String requete="Select * from approvisionner";
        List<Article> list_article =new ArrayList<Article>();
        ResultSet rs;
        try {
            Statement state= con.createStatement();
           rs= state.executeQuery(requete);
           while(rs.next())
           {
               Article art = new Article();
               art.setCode(rs.getInt("code"));
               art.setLibelle(rs.getString("libelle"));
               art.setPrix(rs.getInt("prix"));
               art.setQuantite(rs.getInt("quantite"));
               art.setDatecreation(new java.sql.Date(rs.getDate("datecreation").getTime()) );
               list_article.add(art);
            } 
        } catch (SQLException ex) {
            Logger.getLogger(Traitement.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list_article;
    }
// LISTE DES ARTICLES VENDUS //
    
    @Override
    public List<Article> veliste() {
       Connection con = ConnectionBD.seConnecter();
        String requete="Select * from vente";
        List<Article> list_article =new ArrayList<Article>();
        ResultSet rs;
        try {
            Statement state= con.createStatement();
           rs= state.executeQuery(requete);
           while(rs.next())
           {
               Article art = new Article();
               art.setCode(rs.getInt("code"));
               art.setLibelle(rs.getString("libelle"));
               art.setPrix(rs.getInt("prix"));
               art.setQuantite(rs.getInt("quantite"));
               art.setDatecreation(new java.sql.Date(rs.getDate("datecreation").getTime()) );
               list_article.add(art);
            } 
        } catch (SQLException ex) {
            Logger.getLogger(Traitement.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list_article;
    }

   
 
    
}
