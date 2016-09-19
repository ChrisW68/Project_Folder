using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.Windows.Forms;

class  Program
{
    public static IEnumerable<long> Fibonacci(int n)
    {
        long a = 0;
        long b = 1;
        
        for (int i = 0; i < 25; i++)
        {
            yield return a;

            long sum = a;
            a = b;
            b = sum + b;

        }
    }

    static void Main()
    {
        MessageBox.Show(string.Join(System.Environment.NewLine, Fibonacci(12)));
    }
}
