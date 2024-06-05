/*
  faça um programa que receba duas notas
calcule e mostre a média e diga ao aluno
se ele está aprovado ou reprovado
 */
package encapsulamento_ex04;



public class mediaDao {
    public String msg;
    
    public String calculo (mediaDto MediaDto) {
         if (MediaDto.getNota() < 7) {
       this.msg = "o aluno está reprovado";
       } else {
             this.msg = "o aluno está aprovado";
         }
         
         return this.msg;
    }
  
}
