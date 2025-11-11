<?php

namespace Usuario\Tema6\Tests;

use PHPUnit\Framework\TestCase;
use Usuario\Tema6\Comversor_temperatura;    

final class Comversor_temperaturaTest extends TestCase
{
    private Comversor_temperatura $conversor;
    protected function setUp(): void
    {
        $this->conversor = new Comversor_temperatura();
    }
    public function testCelsiusAFahrenheitCero(): void
    {
        $this->assertSame(32.0, $this->conversor->celsiusAFahrenheit(0.0));
    }
    public function testFahrenheitACelsiusCero(): void
    {
        $this->assertSame(-17.77777777777778, $this->conversor->fahrenheitACelsius(0.0));
    }
    public function testCelsiusAFahrenheitValorNegativo(): void
    {
        $this->assertSame(14.0, $this->conversor->celsiusAFahrenheit(-10.0));
    }
    public function testFahrenheitACelsiusValorNegativo(): void
    {
        $this->assertSame(-25.555555555555557, $this->conversor->fahrenheitACelsius(-14.0));
    }
    public function testCelsiusAFahrenheitValorPositivo(): void
    {
        $this->assertSame(50.0, $this->conversor->celsiusAFahrenheit(10.0));
    }
    public function testFahrenheitACelsiusValorPositivo(): void
    {
        $this->assertSame(10.0, $this->conversor->fahrenheitACelsius(50.0));
    }
    public function testCelsiusAFahrenheitNoNumerico(): void
    {
        $this->assertStringContainsString("No es numérico", $this->conversor->celsiusAFahrenheit("t"));
    }
    public function testFahrenheitACelsiusNoNumerico(): void
    {
        $this->assertStringContainsString("No es numérico", $this->conversor->fahrenheitACelsius("t"));
    }
    public function testCelsiusAFahrenheitValorNulo(): void
    {
        $this->assertNull($this->conversor->celsiusAFahrenheit(null));
    }
    public function testFahrenheitACelsiusValorNulo(): void
    {
        $this->assertNull($this->conversor->fahrenheitACelsius(null));
    }   
}
