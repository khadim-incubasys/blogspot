<?php
class Excelpractice_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
       $this->load->helper('text');
       $this->load->helper('string');
       $this->load->library('excel');
       date_default_timezone_set('Asia/Karachi');
     }
    function add_post()
    {

    $trimmed= trim($this->input->post('post'));
     $new_insert_data=array(
             'blogid'=>$this->input->post('cat'),
             'post'=>$trimmed,
             'title'=>$this->input->post('title'),
             'author'=>$this->session->userdata('udata')->id
        );
        $this->db->insert('blogPost',$new_insert_data);

        return $this->db->insert_id();
    }
    function retrievePost()
    {  
    $query = $this->db->get('blogPost');
     return $query;
    }
    function export_file()
    {
       $this->excel->getProperties()->setCreator("Maarten Balliauw")
                             ->setLastModifiedBy("Maarten Balliauw")
                             ->setTitle("RnD")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'id ')
                    ->setCellValue('B1', 'blogid')
                    ->setCellValue('C1', 'title')
                    ->setCellValue('D1', 'post')
                    ->setCellValue('E1', 'author');
        $query=$this->retrievePost();
        $cell=2;
        $this->load->model('Comment_model');
        foreach ($query->result_array() as $arr) 
        {
             $comments=$this->Comment_model->retrieveComments($arr['id']);
            $this->excel->setActiveSheetIndex(0)
                    ->setCellValue('A'.$cell, $arr['id'])
                    ->setCellValue('B'.$cell, $arr['blogid'])
                    ->setCellValue('C'.$cell, word_limiter($arr['title'],3))
                    ->setCellValue('D'.$cell, word_limiter($arr['post'],3))
                    ->setCellValue('E'.$cell, $arr['author']);
                    $cell++;
        }

        $this->excel->setActiveSheetIndex(0)
                    ->setCellValue('C'.$cell, 'Total Posts:')
                    ->setCellValue('D'.$cell, $cell-1);
        $this->excel->getActiveSheet()->setTitle('Reporting RnD');

        //set cell A1 content with some text
       // $this->excel->getActiveSheet()->setCellValue('A1', 'This is just some text value');
        //change the font size
        //require_once 'http://loacalhost/blogspot/third_party/PHPExcel.php';

        // $this->excel->getActiveSheet()->freezePane('C1');
        //$this->excel->getActiveSheet()->
        $this->excel->getActiveSheet()->getColumnDimensionByColumn(2, 2)->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimensionByColumn(3, 2)->setWidth(30);
          // $this->excel->getActiveSheet()->getRowDimensionByRow(3, 2)->setHeight(30);
       $this->excel->setActiveSheetIndex(0)->freezePane('A1');
         $this->excel->getActiveSheet()->getStyle('C'.$cell)->getFont()->setBold(true);
         $this->excel->getActiveSheet()->getStyle('D'.$cell)->getFont()->setBold(true);
        //make the font become bold
        // $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        //merge cell A1 until D1
        // $this->excel->getActiveSheet()->mergeCells('A1:D1');
        //set aligment to center for that merged cell (A1 to D1)
        // $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
         
        $filename='reportingRnD.xls'; //save our workbook as this file name
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
                     
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
    }
    function count_words()
    {
         $f = 'http://localhost/blogspot/xyz.txt';
        //$f = 'http://localhost/blogspot/xyz.txt';
        // read into string
        $str = file_get_contents($f);

        // count characters
        $numChar = strlen($str);
        echo "This file have ". $numChar . " character(s)";
        echo"<ber>"
        // count characters withour spaces
        ini_set("magic_quotes_runtime",0); 
        // $str2 = ereg_replace('[[:space:]]+', '', $str);
        // $numChar = strlen($str2);
        // echo "This file have ". $numChar . " character(s) without spaces";

        // count words
        $numWords = str_word_count($str);
        echo "This file have ". $numWords . " words";

    }
}