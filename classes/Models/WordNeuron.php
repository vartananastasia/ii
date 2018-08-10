<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 10.08.2018
 * Time: 11:37
 */

class WordNeuron extends AbstractModel
{
    private $wordId;
    private $wordNeuronId;
    private $weight;
    private $userId;

    const TABLE_NAME = 'word_neuron';

    public static function migrate()
    {
        return [
            'word_id' => ['type' => 'int(11)', 'is' => 'pk'],
            'word_neuron_id' => ['type' => 'int(11)', 'is' => 'fk'],
            'weight' => ['type' => 'int(11)'],
            'user_id' => ['type' => 'int(11)', 'is' => 'fk']
        ];
    }

    public function getWordId()
    {
        return $this->wordId;
    }

    public function getWordNeuronId()
    {
        return $this->wordNeuronId;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}