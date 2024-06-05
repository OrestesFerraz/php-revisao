/*
 faça um programa que receba duas notas
calcule e mostre a média e diga ao aluno
se ele está aprovado ou reprovado
 */
package encapsulamento_ex04;

import java.awt.HeadlessException;
import javax.swing.JOptionPane;

public class mediaView {
    
    public static void main (String[] args) {
        try{
            mediaDto MediaDto = new mediaDto();
            mediaCtr mediaCtr = new mediaCtr();
            
            MediaDto.setNota(Double.parseDouble(JOptionPane.showInputDialog("informe a nota")));
            
            JOptionPane.showMessageDialog(null, mediaCtr.calcular(MediaDto));
        } catch (HeadlessException | NumberFormatException e) {
            JOptionPane.showMessageDialog(null, "Erro no sistema : \n " + e.getMessage());
        }
    }
    
}
