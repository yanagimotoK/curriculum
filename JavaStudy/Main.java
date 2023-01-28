/**
 * バブルソート
 * チェックテスト-Java３章
 *
 */
public class Main{
  public static void main(String[] args){
      /*
      * 問1
      * int型の配列dataを作成し、値を3,1,2,7,5で初期化しなさい
      */
      int[]data = {3,1,2,7,5};

      /*
      * 問2
      * 以下のfor文を完成させなさい
      */                                              
          //0からスタート      //5-1==4      /*iのあとにプラス1をする */
      for(int i = 0; i < data.length; i++){
          System.out.print(data[i] + " ");
      }
      System.out.println();
      //int i = 0 → イント配列の変数名dataのインデックス番号、0番目
      //i < data.lenght; → どこまでの処理をさせるか
      //i++ → インデックス番号0から1ずつ足していく
      for (int i = 0; i < data.length; i++) {
          for (int j = data.length-1; j > i; j--) {
              /*
              * 問3
              * 以下、配列の添字を入れてソートを完成させなさい
              */
              //iがjより大きかったら置換
              if(data[i] > data[j]){
                int box = data[i];//boxに3を退避 box=3 data[i]=3
                data[i] = data[j];
                data[j] = box;
              }
          }
      }
      for(int i = 0; i < data.length; i++){
          System.out.print(data[i] + " ");
      }
  }
}