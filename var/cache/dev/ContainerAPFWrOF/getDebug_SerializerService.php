<?php

namespace ContainerAPFWrOF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_SerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Debug\TraceableSerializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Debug/TraceableSerializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Debug/TraceableNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/UnwrappingDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/Normalizer/FlattenExceptionNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/UidNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/MimeMessageNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/PropertyNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/FormErrorNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/BackedEnumNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Debug/TraceableEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';

        $a = ($container->privates['property_info'] ?? self::getPropertyInfoService($container));

        if (isset($container->privates['debug.serializer'])) {
            return $container->privates['debug.serializer'];
        }
        $b = ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService'));
        $c = ($container->privates['serializer.data_collector'] ??= new \Symfony\Component\Serializer\DataCollector\SerializerDataCollector());
        $d = ($container->privates['serializer.mapping.class_metadata_factory'] ?? $container->load('getSerializer_Mapping_ClassMetadataFactoryService'));

        $e = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($d);
        $f = new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($d);

        return $container->privates['debug.serializer'] = new \Symfony\Component\Serializer\Debug\TraceableSerializer(new \Symfony\Component\Serializer\Serializer([new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer($b), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer(), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\UidNormalizer(), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $e), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer(new \Symfony\Component\Serializer\Normalizer\PropertyNormalizer($d, $e, $a, $f, NULL)), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer(), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer(), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($container->privates['mime_types'] ?? $container->load('getMimeTypesService'))), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(NULL, NULL), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), $c), new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($d, $e, $b, $a, $f, NULL), $c)], [new \Symfony\Component\Serializer\Debug\TraceableEncoder(new \Symfony\Component\Serializer\Encoder\XmlEncoder(), $c), new \Symfony\Component\Serializer\Debug\TraceableEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncoder(NULL, NULL), $c), new \Symfony\Component\Serializer\Debug\TraceableEncoder(new \Symfony\Component\Serializer\Encoder\YamlEncoder(NULL, NULL), $c), new \Symfony\Component\Serializer\Debug\TraceableEncoder(new \Symfony\Component\Serializer\Encoder\CsvEncoder(), $c)]), $c);
    }
}
