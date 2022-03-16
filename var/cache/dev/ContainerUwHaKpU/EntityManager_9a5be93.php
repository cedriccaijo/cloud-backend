<?php

namespace ContainerUwHaKpU;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8616a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere4695 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties232d2 = [
        
    ];

    public function getConnection()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getConnection', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getMetadataFactory', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getExpressionBuilder', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'beginTransaction', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getCache', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getCache();
    }

    public function transactional($func)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'transactional', array('func' => $func), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'wrapInTransaction', array('func' => $func), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'commit', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->commit();
    }

    public function rollback()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'rollback', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getClassMetadata', array('className' => $className), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'createQuery', array('dql' => $dql), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'createNamedQuery', array('name' => $name), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'createQueryBuilder', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'flush', array('entity' => $entity), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'clear', array('entityName' => $entityName), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->clear($entityName);
    }

    public function close()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'close', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->close();
    }

    public function persist($entity)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'persist', array('entity' => $entity), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'remove', array('entity' => $entity), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'refresh', array('entity' => $entity), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'detach', array('entity' => $entity), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'merge', array('entity' => $entity), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getRepository', array('entityName' => $entityName), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'contains', array('entity' => $entity), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getEventManager', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getConfiguration', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'isOpen', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getUnitOfWork', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getProxyFactory', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'initializeObject', array('obj' => $obj), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'getFilters', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'isFiltersStateClean', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'hasFilters', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return $this->valueHolder8616a->hasFilters();
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

        $instance->initializere4695 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8616a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8616a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8616a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, '__get', ['name' => $name], $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        if (isset(self::$publicProperties232d2[$name])) {
            return $this->valueHolder8616a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8616a;

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

        $targetObject = $this->valueHolder8616a;
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
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8616a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8616a;
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
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, '__isset', array('name' => $name), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8616a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8616a;
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
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, '__unset', array('name' => $name), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8616a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8616a;
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
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, '__clone', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        $this->valueHolder8616a = clone $this->valueHolder8616a;
    }

    public function __sleep()
    {
        $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, '__sleep', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;

        return array('valueHolder8616a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere4695 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere4695;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere4695 && ($this->initializere4695->__invoke($valueHolder8616a, $this, 'initializeProxy', array(), $this->initializere4695) || 1) && $this->valueHolder8616a = $valueHolder8616a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8616a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8616a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
