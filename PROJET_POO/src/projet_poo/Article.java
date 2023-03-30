/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet_poo;

import java.util.Date;

/**
 *
 * @author Divin_wsk James
 */
public class Article {
    
    private int code;
    private String libelle;
    private int prix;
    private int quantite;
    private Date datecreation;

    public Article() {
    }

    public Article(int code, String libelle, int prix, int quantite, Date datecreation) {
        this.code = code;
        this.libelle = libelle;
        this.prix = prix;
        this.quantite = quantite;
        this.datecreation = datecreation;
    }

    
    
    
    public int getCode() {
        return code;
    }

    public void setCode(int code) {
        this.code = code;
    }

    public String getLibelle() {
        return libelle;
    }

    public void setLibelle(String libelle) {
        this.libelle = libelle;
    }

    public int getPrix() {
        return prix;
    }

    public void setPrix(int prix) {
        this.prix = prix;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public Date getDatecreation() {
        return datecreation;
    }

    public void setDatecreation(Date datecreation) {
        this.datecreation = datecreation;
    }
   
    
    
}

