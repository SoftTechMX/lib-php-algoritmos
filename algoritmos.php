<?php

class Algoritmos
{
    public $cycleCounter;
    
    /**
     *                                  bubbleSort Algorithm Time Complexity
     * +----------------------------------------------------------------------------------------------------+
     * |         Best               |                 Worst              |             Average              |
     * +----------------------------------------------------------------------------------------------------+
     * |         O(n)               |                 O(n^2)             |              O(n^2)              |
     * +----------------------------------------------------------------------------------------------------+
     * @brief ordena los elementos de un array de menor a mayor.
     * @category algoritmo de ordenamiento.
     * @param int* arreglo
     * Es el array que se desea ordenar
     * @return bool
     * Si el array se puede ordenar de manera correcta retorna true, en caso de algun error retorna false.
     */
    public function bubbleSort( &$a )
    {
        // VALIDAMOS QUE $a SEA UN ARRAY
        if( is_array($a) )
        {
            $array_size = count($a);
            for($i = 0; $i < ($array_size - 1); $i++)
            {
                for($j = 0; $j < ($array_size - 1) - $i; $j++)
                {
                    if( $a[$j] > $a[$j+1] )
                    {
                        $aux = $a[$j];
                        $a[$j] = $a[$j+1];
                        $a[$j+1] = $aux;
                        $this->cycleCounter++;
                    }
                }
            }
            return true;
        }
        else
        {
            // SI $a NO ES UN ARRAY
            return false;
        }
    }

    /**
     * ======================================================================================================
     *                                      quickSort Time Complexity
     * Best:        O(n*log n)
     * Worst:       O(n^2)
     * Average:     O(n*log n)
     * ======================================================================================================
     */
    private function partition(&$a, &$low, &$high)
    {
        // select the rightmost element as pivot
        $pivot = $a[$high];
        
        // pointer for greater element
        $i = ($low - 1);

        // traverse each element of the array
        // compare them with the pivot
        for ($j = $low; $j < $high; $j++) {
            if ($a[$j] <= $pivot)
            {    
                // if element smaller than pivot is found
                // swap it with the greater element pointed by i
                $i++;
                
                // swap element at i with element at j
                //swap(&array[i], &array[j]);
                $aux = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $aux;

                $this->cycleCounter++;
            }
        }
        
        // swap pivot with the greater element at i
        //swap(&array[i + 1], &array[high]);
        $aux = $a[$i+1];
        $a[$i+1] = $a[$high];
        $a[$high] = $aux;
        
        // return the partition point
        return ($i + 1);
    }

    public function quickSort(&$a, $low, $high)
    {
        if ($low < $high)
        {
            // find the pivot element such that
            // elements smaller than pivot are on left of pivot
            // elements greater than pivot are on righ of pivot
            $pi = $this->partition($a, $low, $high);
        
            // recursive call on the left of pivot
            $this->quickSort($a, $low, $pi - 1);
        
            // recursive call on the right of pivot
            $this->quickSort($a, $pi + 1, $high);
        }
    }

    /**
     * ======================================================================================================
     *                                      insertionSort Time Complexity
     * Best:        O(n)
     * Worst:       O(n^2)
     * Average:     O(n^2)
     * ======================================================================================================
     */
    public function insertionSort()
    {
        
    }

    /**
     * Time Complexity
     * Best:        O(n*log n)
     * Worst:       O(n*log n)
     * Average:     O(n*log n)
     */
    public function mergeSort()
    {
        
    }

    /**
     * Time Complexity
     * Best:        O(n^2)
     * Worst:       O(n^2)
     * Average:     O(n^2)
     */
    public function selectionSort()
    {
        
    }

    /**
     * Time Complexity
     * Best:        O(n+k)
     * Worst:       O(n^2)
     * Average:     O(n)
     */
    public function bucketSort()
    {
        
    }

    /**
     * Time Complexity
     * Best:        O(n+k)
     * Worst:       O(n+k)
     * Average:     O(n+k)
     */
    public function radixSort()
    {
        
    }

    /**
     * Time Complexity
     * Best:        O(n+k)
     * Worst:       O(n+k)
     * Average:     O(n+k)
     */
    public function countingSort()
    {
        
    }

    /**
     * Time Complexity
     * Best:        O(nlog n)
     * Worst:       O(nlog n)
     * Average:     O(nlog n)
     */
    public function heapSort()
    {
        
    }

    /**
     * Time Complexity  
     * Best:        O(n)
     * Worst:       O(n)
     * Average:     O(n)
     */
    public function linearSearch()
    {
        
    }

    /**
     * Time Complexity  
     * Best:        O(1)
     * Worst:       O(log n)
     * Average:     O(log n)
     */
    public function binarySearch()
    {
        
    }
}