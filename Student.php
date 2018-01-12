<?php
/**
 * Student class.
 * 
 * @author Vinz
 */

class Student {
    /**
     * Constructor for a Student .
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Method for adding an email address for a Student.
     * 
     * @param type $which
     * @param type $address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Method for adding a grade for a Student.
     * 
     * @param type $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Method for calculating a Student's average.
     * 
     * @return type
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Method for returning all information of a Student.
     * 
     * @return type
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        return '<pre>' . $result . '</pre>';
    }
}
