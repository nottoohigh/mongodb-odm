<?php

declare(strict_types=1);

namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(collection="users_upsert_id_strategy_none")
 * @ODM\InheritanceType("SINGLE_COLLECTION")
 * @ODM\DiscriminatorField("discriminator")
 * @ODM\DiscriminatorMap({
 *     "user"="Documents\UserUpsertIdStrategyNone"
 * })
 */
class UserUpsertIdStrategyNone
{
    /** @ODM\Id(strategy="none") */
    public $id;

    /** @ODM\Field(type="string") */
    public $username;

    /** @ODM\Field(type="int") */
    public $hits;

    /** @ODM\Field(type="int", strategy="increment") */
    public $count;

    /** @ODM\ReferenceMany(targetDocument=Group::class, cascade={"all"}) */
    public $groups;

    /** @ODM\Field(type="string", nullable=true) */
    public $nullableField;
}
