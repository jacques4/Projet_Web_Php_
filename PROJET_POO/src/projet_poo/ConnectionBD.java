/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet_poo;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;

/**
 *
 * @author Divin_wsk James
 */
public class ConnectionBD {
    
 
    
    public static Connection seConnecter()
    {
        try {
            Class.forName("com.mysql.jdbc.Driver");
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(ConnectionBD.class.getName()).log(Level.SEVERE, null, ex);
        }
        String url="jdbc:mysql://localhost:3306/projetpoo";
        String user="root";
        String password="";
        try {
            Connection conect =DriverManager.getConnection(url, user, password);
           // JOptionPane.showMessageDialog(null,"connexion reuissi !!!");
            return conect;
        } catch (SQLException ex) {
            Logger.getLogger(ConnectionBD.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }
        
    }
    
    
}

   
