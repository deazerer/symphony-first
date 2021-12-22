<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meter
 *
 * @ORM\Table(name="meter", indexes={@ORM\Index(name="IDX_CONSUMER", columns={"consumer_id"}), @ORM\Index(name="IDX_5E010CAE23EDC87", columns={"subject_id"}), @ORM\Index(name="IDX_SERIAL", columns={"serial_number"})})
 * @ORM\Entity
 */
class Meter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="controller_id", type="string", length=11, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $controllerId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="supermeter_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $supermeterId = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="consumer_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $consumerId = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial_number", type="string", length=55, nullable=true, options={"default"="NULL"})
     */
    private $serialNumber = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meter_name", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $meterName = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="net_address", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $netAddress = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_password", type="string", length=55, nullable=true, options={"default"="''"})
     */
    private $userPassword = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_password", type="string", length=55, nullable=true, options={"default"="''"})
     */
    private $adminPassword = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_counter", type="string", length=100, nullable=true, options={"default"="NULL","comment"="нужен для энергомеры"})
     */
    private $idCounter = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_counter", type="string", length=255, nullable=true, options={"default"="NULL","comment"="нужен для энергомеры"})
     */
    private $modelCounter = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="k_transf_i", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kTransfI = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="k_transf_u", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kTransfU = NULL;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="status", type="boolean", nullable=true, options={"comment"="для удаления = 3"})
     */
    private $status = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prod_date", type="date", nullable=true, options={"default"="NULL"})
     */
    private $prodDate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ts_include", type="integer", nullable=true, options={"comment"="время добавления"})
     */
    private $tsInclude = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="batt_u", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $battU = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="task_execution_option", type="string", length=55, nullable=true, options={"default"="''"})
     */
    private $taskExecutionOption = '\'\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_const", type="smallint", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $countConst = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="firmvare_ver", type="string", length=50, nullable=true, options={"default"="''"})
     */
    private $firmvareVer = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="category", type="boolean", nullable=false)
     */
    private $category = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $typeId = NULL;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sub_type", type="boolean", nullable=true)
     */
    private $subType = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tariffs_num", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $tariffsNum = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="water_hot", type="boolean", nullable=false)
     */
    private $waterHot;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="access_type", type="boolean", nullable=true)
     */
    private $accessType = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="request_type", type="boolean", nullable=true)
     */
    private $requestType = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="xml_code", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $xmlCode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="xml_name", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $xmlName = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="next_evaluation_date", type="date", nullable=true, options={"default"="NULL","comment"="дата следующей поверки"})
     */
    private $nextEvaluationDate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="k_transf_i_type", type="string", length=255, nullable=true, options={"default"="NULL","comment"="тип трансформатора"})
     */
    private $kTransfIType = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="k_transf_i_evaluation_date", type="date", nullable=true, options={"default"="NULL","comment"="дата поверки"})
     */
    private $kTransfIEvaluationDate = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="k_transf_i_numerator", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kTransfINumerator = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="k_transf_i_denominator", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kTransfIDenominator = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="k_transf_i_next_evaluation_date", type="date", nullable=true, options={"default"="NULL","comment"="дата следующей поверки"})
     */
    private $kTransfINextEvaluationDate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="k_transf_u_type", type="string", length=255, nullable=true, options={"default"="NULL","comment"="тип трансформатора"})
     */
    private $kTransfUType = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="k_transf_u_numerator", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kTransfUNumerator = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="k_transf_u_denominator", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kTransfUDenominator = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="k_transf_u_evaluation_date", type="date", nullable=true, options={"default"="NULL","comment"="дата поверки"})
     */
    private $kTransfUEvaluationDate = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="k_transf_u_next_evaluation_date", type="date", nullable=true, options={"default"="NULL","comment"="дата следующей поверки"})
     */
    private $kTransfUNextEvaluationDate = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="need_task", type="boolean", nullable=true, options={"default"="1"})
     */
    private $needTask = true;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="evaluation_date", type="date", nullable=true, options={"default"="NULL","comment"="дата поверки счетчика"})
     */
    private $evaluationDate = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="owner_type", type="boolean", nullable=false)
     */
    private $ownerType = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="owner_people", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $ownerPeople = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="virtual", type="boolean", nullable=false)
     */
    private $virtual = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="subject_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $subjectId = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="k_in_meter", type="boolean", nullable=false)
     */
    private $kInMeter = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="external", type="boolean", nullable=false)
     */
    private $external = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="low_data_freq", type="boolean", nullable=false)
     */
    private $lowDataFreq = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="text", length=65535, nullable=false)
     */
    private $settings;

    /**
     * @var string
     *
     * @ORM\Column(name="pulse_settings", type="string", length=1000, nullable=false, options={"default"="''"})
     */
    private $pulseSettings = '\'\'';


}
