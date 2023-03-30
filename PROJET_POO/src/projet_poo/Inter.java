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
public interface Inter <T>{
    
    public abstract boolean enregistrer(T t);
    public abstract boolean supprimer(T t);
    public abstract boolean modifier(T t);
    public abstract DefaultTableModel rechercher(String lib);
    public abstract boolean vente(T t,int qtes);
    public abstract boolean approvisionner(T t, int qte);
    public abstract List<T> lister();
    public abstract List<T> seuil();
    public abstract List<T> apliste();
    public abstract List<T> veliste();
    public abstract int nombre();
    public abstract boolean ventes(T t);
    public abstract boolean approvisionners(T t);
    
    
    
}
