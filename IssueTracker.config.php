<?php
/**
 * Issue Tracking System
 * 
 * Configuration class for the IssueTracker extension.
 *
 * @category    Extensions
 * @package     IssueTracker
 * @author      Federico Cargnelutti
 * @copyright   Copyright (c) 2008 Federico Cargnelutti
 * @license     GNU General Public Licence 2.0 or later
 */
class IssueTrackerConfig
{
	/**
	 * Issue type array.
	 * @var array
	 */
	protected $_issueType = null;
	
	/**
	 * Issue status array.
	 * @var array
	 */
	protected $_issueStatus = null;

    protected $_issueSeverity = null;
    protected $_issuePriority = null;

    public function setIssueSeverity($severity = array())
    {
        $severity[1] = array('name' => '1 Critical', 'default' => false);
        $severity[2] = array('name' => '2 Major', 'default' => true);
        $severity[3] = array('name' => '3 Minor', 'default' => false);
        $severity[4] = array('name' => '4 Trivial', 'default' => false);

        $this->_issueSeverity = $severity;
    }
    public function getIssueSeverity()
    {
        if ($this->_issueSeverity === null) {
            $this->setIssueSeverity();
        }
        return $this->_issueSeverity;
    }
    public function setIssuePriority($priority = array())
    {
        $priority[1] = array('name' => '1 High', 'default' => false);
        $priority[2] = array('name' => '2 Medium', 'default' => true);
        $priority[3] = array('name' => '3 Low', 'default' => false);

        $this->_issuePriority = $priority;
    }

    public function getIssuePriority()
    {
        if ($this->_issuePriority === null) {
            $this->setIssuePriority();
        }
        return $this->_issuePriority;
    }
	/**
	 * Sets the issue type array.
	 * 
	 * An issue's type expresses what kind of issue it is and also allows custom 
	 * name and color to be added to an issue.
	 *
	 * @param array $type
	 * @return void
	 */
	public function setIssueType($type = array()) 
	{
		$type['t_bug'] = array('name' => 'Bug', 'colour' => 'FFDFDF');
		$type['t_fea'] = array('name' => 'New Feature', 'colour' => 'E1FFDF');
		$type['t_imp'] = array('name' => 'Improvement', 'colour' => 'FFFFCF');
		$type['t_doc'] = array('name' => 'Doc', 'colour' => 'F9F9F9');
		$type['t_fee'] = array('name' => 'Feedback', 'colour' => 'E5D4E7');
		$type['t_tes'] = array('name' => 'Test', 'colour' => 'DFE2FF');
		
		$this->_issueType = $type;
	}
	
	/**
	 * Returns the issue type array.
	 *
	 * @return array self::$_issueType
	 */
	public function getIssueType() 
	{
		if ($this->_issueType === null) {
			$this->setIssueType();
		}
		return $this->_issueType;
	}
	
	/**
	 * Sets the issue status array.
	 *
	 * @param array $status
	 * @return void
	 */
	public function setIssueStatus($status = array()) 
	{
		$status['s_new'] = array('name' => 'New', 'colour' => 'F9F9F9');
		$status['s_asi'] = array('name' => 'Assigned', 'colour' => 'F9F9F9');
		$status['s_res'] = array('name' => 'Resolved', 'colour' => 'B8EFB3');
		$status['s_clo'] = array('name' => 'Closed', 'colour' => 'F9F9F9');
		
		$this->_issueStatus = $status;
	}
	
	/**
	 * Returns the issue status array.
	 *
	 *@return array self::$_issueStatus
	 */
	public function getIssueStatus() 
	{
		if ($this->_issueStatus === null) {
			$this->setIssueStatus();
		}
		return $this->_issueStatus;
	}
}
