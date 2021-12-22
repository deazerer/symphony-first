<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetersDataTech
 *
 * @ORM\Table(name="meters_data_tech")
 * @ORM\Entity
 */
class MetersDataTech
{
    /**
     * @var int
     *
     * @ORM\Column(name="meter_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $meterId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="time_server", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $timeServer = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_meter", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $timeMeter = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meter_state", type="text", length=255, nullable=true, options={"default"="NULL"})
     */
    private $meterState = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_a", type="decimal", precision=20, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyA = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_r", type="decimal", precision=16, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyR = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t1_a", type="decimal", precision=20, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT1A = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t1_r", type="decimal", precision=16, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT1R = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t2_a", type="decimal", precision=20, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT2A = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t2_r", type="decimal", precision=16, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT2R = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t3_a", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT3A = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t3_r", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT3R = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t4_a", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT4A = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t4_r", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT4R = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t5_a", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT5A = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t5_r", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT5R = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_a1", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyA1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_a2", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyA2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_a3", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyA3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t1_a1", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT1A1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t1_a2", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT1A2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t1_a3", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT1A3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t2_a1", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT2A1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t2_a2", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT2A2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t2_a3", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT2A3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t3_a1", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT3A1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t3_a2", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT3A2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t3_a3", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT3A3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t4_a1", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT4A1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t4_a2", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT4A2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t4_a3", type="decimal", precision=10, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $energyT4A3 = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="p", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $p = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="p1", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $p1 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="p2", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $p2 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="p3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $p3 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="q", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $q = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="q1", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $q1 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="q2", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $q2 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="q3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $q3 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="s", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $s = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="s1", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $s1 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="s2", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $s2 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="s3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $s3 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cos", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $cos = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cos1", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $cos1 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cos2", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $cos2 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cos3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $cos3 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="u1", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $u1 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="u2", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $u2 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="u3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $u3 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="i1", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $i1 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="i2", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $i2 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="i3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $i3 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ang1_2", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $ang12 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ang1_3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $ang13 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ang2_3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $ang23 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="freq", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $freq = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_a_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyAReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t1_a_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT1AReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t2_a_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT2AReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t3_a_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT3AReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t4_a_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT4AReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t5_a_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT5AReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_r_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyRReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t1_r_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT1RReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t2_r_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT2RReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t3_r_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT3RReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t4_r_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT4RReverse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="energy_t5_r_reverse", type="decimal", precision=14, scale=7, nullable=true, options={"default"="NULL"})
     */
    private $energyT5RReverse = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="phase_stat", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $phaseStat = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ang_u_i_1", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $angUI1 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ang_u_i_2", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $angUI2 = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ang_u_i_3", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $angUI3 = NULL;


}
