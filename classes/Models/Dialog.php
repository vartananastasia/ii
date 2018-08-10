<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 10.08.2018
 * Time: 11:36
 */

namespace Models;

class Dialog extends AbstractModel
{
    private $id;
    private $phraseId;
    private $phraseBeforeId;

    const TABLE_NAME = 'dialog';

    public static function migrate()
    {
        return [
            'id' => ['type' => 'int(11)', 'is' => 'pk'],
            'phrase_id' => ['type' => 'int(11)', 'is' => 'fk'],
            'phrase_before_id' => ['type' => 'int(11)', 'is' => 'fk']
        ];
    }

    public function getThis()
    {
        // TODO: Implement getThis() method.
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPhrase(): \Phrase
    {
        return Phrase::get($this->phraseId);
    }

    public function setPhrase(\Phrase $phrase)
    {
        $this->phraseId = $phrase->getId();
    }

    public function getPhraseBefore(): \Phrase
    {
        return \Phrase::get($this->phraseBeforeId);
    }

    public function setPhraseBefore(\Phrase $phraseBefore)
    {
        $this->phraseBeforeId = $phraseBefore->getId();
    }
}