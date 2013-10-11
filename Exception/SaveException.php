<?php
namespace Ddeboer\Salesforce\ClientBundle\Exception;

/**
 * SaveException is thrown if saving objects to Salesforce fails
 */
class SaveException extends \Exception
{
    /**
     * Saved objects
     * @param array
     */
    protected $results = array();

    /**
     * getResults
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * setResults
     * @param array $results
     */
    public function setResults(array $results)
    {
        $this->results = $results;
    }
}
?>
