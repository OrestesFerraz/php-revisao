/*
 faça um programa que receba duas notas
calcule e mostre a média e diga ao aluno
se ele está aprovado ou reprovado
 */
package encapsulamento_ex04;



public class mediaCtr {
    
    mediaDao MediaDao = new mediaDao();
    
    public String calcular (mediaDto MediaDto) {
        return MediaDao.calculo(MediaDto);
    }
}
