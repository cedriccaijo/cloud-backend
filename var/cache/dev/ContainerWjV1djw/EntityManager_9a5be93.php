<?php

namespace ContainerWjV1djw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3957d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer35c96 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdbf75 = [
        
    ];

    public function getConnection()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getConnection', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getMetadataFactory', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getExpressionBuilder', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'beginTransaction', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getCache', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'transactional', array('func' => $func), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'commit', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->commit();
    }

    public function rollback()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'rollback', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getClassMetadata', array('className' => $className), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'createQuery', array('dql' => $dql), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'createNamedQuery', array('name' => $name), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'createQueryBuilder', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'flush', array('entity' => $entity), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'clear', array('entityName' => $entityName), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->clear($entityName);
    }

    public function close()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'close', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->close();
    }

    public function persist($entity)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'persist', array('entity' => $entity), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'remove', array('entity' => $entity), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'refresh', array('entity' => $entity), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'detach', array('entity' => $entity), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'merge', array('entity' => $entity), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'contains', array('entity' => $entity), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getEventManager', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getConfiguration', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'isOpen', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getUnitOfWork', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getProxyFactory', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'initializeObject', array('obj' => $obj), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'getFilters', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'isFiltersStateClean', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'hasFilters', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return $this->valueHolder3957d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer35c96 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3957d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3957d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3957d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, '__get', ['name' => $name], $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        if (isset(self::$publicPropertiesdbf75[$name])) {
            return $this->valueHolder3957d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3957d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3957d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3957d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3957d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, '__isset', array('name' => $name), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3957d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3957d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, '__unset', array('name' => $name), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3957d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3957d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, '__clone', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        $this->valueHolder3957d = clone $this->valueHolder3957d;
    }

    public function __sleep()
    {
        $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, '__sleep', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;

        return array('valueHolder3957d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer35c96 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer35c96;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer35c96 && ($this->initializer35c96->__invoke($valueHolder3957d, $this, 'initializeProxy', array(), $this->initializer35c96) || 1) && $this->valueHolder3957d = $valueHolder3957d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3957d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3957d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
