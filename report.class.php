<?php
/**
* Contains a class to configure a valid report objects for the Adobe Analytics API
* @author Justin Grover
* @package AdobeAPI
*/
require_once("analyticsAPI.php");
/** 
* Class to configure a valid report object
* @package AdobeAPI
*/
class Report extends analyticsAPI
{
	private $dateTo = "";
	private $dateFrom = "";
	private $reportSuite = "";
	private $elements = array();
	private $metrics = array();
	private $segmentID = "";
	private $anomallyDetection = true;
	
	/**
	* Sets the end date for the report 
	* @param string The format should be yyyy-mm-dd
	* @param string the format should be yyyy-mm-dd
	* @todo check to make sure the start date is before the end date
	* @todo add a return
	*/
	function setDates ($startDate, $endDate)
	{
		$this->dateFrom = $startDate;
		$this->dateTo = $endDate;	
	}
	
	/**
	* Gets the end date for the report
	*/
	function getDates()
	{
	
	}
	
	/**
	* Sets the report suite for the Report
	* @param string the report suite ID
	*/
	function setReportSuite($rsid)
	{
	
	}
	
	/**
	* Returns the report suite ID if it has been specified otherwise it will call the Company.GetReportSuites method in the API and take the 1st one alphabetically 
	* @return string|boolean returns false if no report suite can be determined
	*/
	function getReportSuiteID()
	{	
		
	}
	
	/**
	* Adds a metric to the report
	* @param string the id of the metric to be added
	*/
	function addMetric($metric)
	{
	
	}
	
	/**
	* Removes a metric from the report 
	* @param string the id of the metric to be removed
	*/
	function removeMetric($metric)
	{
	
	}
	
	/** 
	* Returns the array of metrics for the report if no metric has been specified will return page_views
	* @return array The array of metric objects in the report
	*/
	function getMetrics()
	{
	
	}
	
	/** 
	* Adds an Element to the report
	* @todo implement a search object
	* @todo define an element object
	* @param string the id of the element
	* @param string the classification id for the element OPTIONAL
	* @param int the top x items in the list
	* @param int how far down the list to start returning results
	* @param object an object with the search criteria
	* @param array an array of selected items to include in the report
	*/
	function addElement ($id, $classification = false, $top = false, $startingWith = false, $search = false, $selected = false)
	{
		
	}
	
	/** 
	* removes an element from the report
	* @param string the id of the element to remove
	*/
	function removeElement($id)
	{
		
	}
	
	/** 
	* returns the elements of the report. If no element has been set will return page views
	* @return array and array of element objects
	*/
	function getElements()
	{
	
	}
	
	/**
	* Sets the segment ID for the report
	* @param string the segment ID
	*/
	function setSegmentID($segmentID)
	{
	
	}
	
	/**
	* Returns the segment id for the report
	* @return string|false the id of the segment if one exists returns false if no segment id exists
	*/
	function getSegmentID()
	{
	
	}
	
	/**
	* Queues the report and then waits for the output. 
	* @return string JSON results of the report
	*/
	function runReport()
	{
	
	}
	
	/**
	* Sets anomaly detection
	* @param boolean
	*/
	function setAnomalyDetection($anomalyDetection)
	{
	
	}
	
	/**
	* Returns the value for Anomaly Detection
	* @return boolean 
	*/
	function getAnaomalyDetection()
	{
	
	}
	
	/**
	* returns the last run report
	* @return string JSON results of the report
	*/
	function getReport()
	{
	
	}

}
?>